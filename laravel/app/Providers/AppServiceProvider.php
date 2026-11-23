<?php

namespace App\Providers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        // Behind Cloudflare/nginx proxy the request reaches Laravel as http,
        // so force https links (CSS/JS/forms) in production.
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
