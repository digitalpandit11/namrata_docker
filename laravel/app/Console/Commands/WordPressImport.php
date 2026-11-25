<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

/**
 * Imports blog posts from the old WordPress site (bbcpl.in).
 *
 *   php artisan wp:import           first-time import (skips posts that already exist)
 *   php artisan wp:import --update  update all existing posts (and add new ones)
 *
 * Runs only from the command line, so it cannot be triggered from a browser.
 */
class WordPressImport extends Command
{
    protected $signature = 'wp:import {--update : Update existing posts instead of skipping them}';

    protected $description = 'Import blog posts from the WordPress site (bbcpl.in)';

    private const WP_API = 'https://bbcpl.in/wp-json/wp/v2';
    private const PER_PAGE = 100;

    public function handle(): int
    {
        $update = (bool) $this->option('update');

        $saved   = 0;
        $skipped = 0;
        $errors  = [];
        $page    = 1;

        $this->info($update ? 'Updating posts from WordPress...' : 'Importing new posts from WordPress...');

        while (true) {
            $response = $this->http()->get(self::WP_API . '/posts', [
                'per_page' => self::PER_PAGE,
                'page'     => $page,
                '_embed'   => 1,
            ]);

            if ($response->failed() || empty($response->json())) {
                break;
            }

            $posts = $response->json();

            foreach ($posts as $wpPost) {
                try {
                    if (!$update && Post::where('wp_id', $wpPost['id'])->exists()) {
                        $skipped++;
                        continue;
                    }

                    $data = [
                        'title'          => $this->cleanText($wpPost['title']['rendered'] ?? ''),
                        'slug'           => $wpPost['slug'],
                        'content'        => $this->rewriteContentImages($wpPost['content']['rendered'] ?? ''),
                        'excerpt'        => $this->cleanText($wpPost['excerpt']['rendered'] ?? ''),
                        'featured_image' => $this->downloadFeaturedImage($wpPost),
                        'published_at'   => $wpPost['date_gmt'] ?? null,
                    ];

                    Post::updateOrCreate(['wp_id' => $wpPost['id']], $data);

                    $saved++;
                    $this->line("  ✔ {$data['slug']}");
                } catch (\Throwable $e) {
                    $errors[] = "Post ID {$wpPost['id']}: {$e->getMessage()}";
                }
            }

            // WP returns fewer than per_page on the last page
            if (count($posts) < self::PER_PAGE) {
                break;
            }

            $page++;
        }

        $this->newLine();
        $this->info(($update ? 'Updated' : 'Imported') . ": {$saved}" . ($update ? '' : ", skipped (already exist): {$skipped}"));

        foreach ($errors as $error) {
            $this->error($error);
        }

        return $errors ? self::FAILURE : self::SUCCESS;
    }

    // ── private helpers ────────────────────────────────────────────────────────

    private function cleanText(string $html): string
    {
        return html_entity_decode(strip_tags($html), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    private function http(): PendingRequest
    {
        // SSL verification disabled for local WAMP dev (no CA bundle on Windows cURL)
        return Http::timeout(30)->withoutVerifying();
    }

    private function downloadFeaturedImage(array $wpPost): ?string
    {
        $mediaUrl = $wpPost['_embedded']['wp:featuredmedia'][0]['source_url'] ?? null;

        if (!$mediaUrl) {
            return null;
        }

        return $this->fetchAndStore($mediaUrl, 'posts');
    }

    private function rewriteContentImages(string $html): string
    {
        // Match all img src pointing to bbcpl.in
        return preg_replace_callback(
            '/src=["\']((https?:\/\/bbcpl\.in)[^"\']+)["\']/',
            function (array $matches) {
                $localPath = $this->fetchAndStore($matches[1], 'posts/content');

                if (!$localPath) {
                    return $matches[0]; // keep original if download fails
                }

                return 'src="' . Storage::disk('public')->url($localPath) . '"';
            },
            $html
        );
    }

    private function fetchAndStore(string $url, string $folder): ?string
    {
        $filename = $folder . '/' . basename(parse_url($url, PHP_URL_PATH));

        // Return cached path if already downloaded
        if (Storage::disk('public')->exists($filename)) {
            return $filename;
        }

        $response = $this->http()->get($url);

        if ($response->failed()) {
            return null;
        }

        Storage::disk('public')->put($filename, $response->body());

        return $filename;
    }
}
