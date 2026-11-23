<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WordPressImportController extends Controller
{
    private const WP_API = 'https://bbcpl.in/wp-json/wp/v2';
    private const PER_PAGE = 100;

    public function import(Request $request)
    {
        set_time_limit(0);

        $imported = 0;
        $skipped  = 0;
        $errors   = [];
        $page     = 1;

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
                    if (Post::where('wp_id', $wpPost['id'])->exists()) {
                        $skipped++;
                        continue;
                    }

                    $featuredImage = $this->downloadFeaturedImage($wpPost);
                    $content       = $this->rewriteContentImages($wpPost['content']['rendered'] ?? '');

                    Post::create([
                        'wp_id'          => $wpPost['id'],
                        'title'          => strip_tags($wpPost['title']['rendered'] ?? ''),
                        'slug'           => $wpPost['slug'],
                        'content'        => $content,
                        'excerpt'        => strip_tags($wpPost['excerpt']['rendered'] ?? ''),
                        'featured_image' => $featuredImage,
                        'published_at'   => $wpPost['date_gmt'] ?? null,
                    ]);

                    $imported++;
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

        return response()->json([
            'status'   => 'done',
            'imported' => $imported,
            'skipped'  => $skipped,
            'errors'   => $errors,
        ]);
    }

    public function reimport(Request $request)
    {
        set_time_limit(0);

        $updated = 0;
        $errors  = [];
        $page    = 1;

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
                    $featuredImage = $this->downloadFeaturedImage($wpPost);
                    $content       = $this->rewriteContentImages($wpPost['content']['rendered'] ?? '');

                    Post::updateOrCreate(
                        ['wp_id' => $wpPost['id']],
                        [
                            'title'          => $this->cleanText($wpPost['title']['rendered'] ?? ''),
                            'slug'           => $wpPost['slug'],
                            'content'        => $content,
                            'excerpt'        => $this->cleanText($wpPost['excerpt']['rendered'] ?? ''),
                            'featured_image' => $featuredImage,
                            'published_at'   => $wpPost['date_gmt'] ?? null,
                        ]
                    );

                    $updated++;
                } catch (\Throwable $e) {
                    $errors[] = "Post ID {$wpPost['id']}: {$e->getMessage()}";
                }
            }

            if (count($posts) < self::PER_PAGE) {
                break;
            }

            $page++;
        }

        return response()->json([
            'status'  => 'done',
            'updated' => $updated,
            'errors'  => $errors,
        ]);
    }

    // ── private helpers ────────────────────────────────────────────────────────

    private function cleanText(string $html): string
    {
        return html_entity_decode(strip_tags($html), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    private function http(): \Illuminate\Http\Client\PendingRequest
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
                $originalUrl = $matches[1];
                $localPath   = $this->fetchAndStore($originalUrl, 'posts/content');

                if (!$localPath) {
                    return $matches[0]; // keep original if download fails
                }

                $localUrl = Storage::disk('public')->url($localPath);
                return 'src="' . $localUrl . '"';
            },
            $html
        );
    }

    private function fetchAndStore(string $url, string $folder): ?string
    {
        $filename  = $folder . '/' . basename(parse_url($url, PHP_URL_PATH));

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
