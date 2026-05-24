<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // On shared hosting the web root (public_html) differs from the repo's public/ folder.
        // Setting PUBLIC_HTML_PATH in .env redirects all file uploads to the correct location.
        if ($path = env('PUBLIC_HTML_PATH')) {
            $this->app->bind('path.public', fn () => $path);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
