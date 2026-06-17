<?php

namespace App\Providers;

use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use League\Flysystem\Local\LocalFilesystemAdapter;
use League\Flysystem\UnixVisibility\PortableVisibilityConverter;
use League\MimeTypeDetection\ExtensionMimeTypeDetector;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // On shared hosting the web root (public_html) differs from the repo's public/ folder.
        // Setting PUBLIC_HTML_PATH in .env redirects all file uploads to the correct location.
        // Must use config() not env() here — config:cache bakes in env values but nullifies direct env() calls.
        if ($path = config('app.public_html_path')) {
            $this->app->usePublicPath($path);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // The fileinfo PHP extension is required by FinfoMimeTypeDetector (used by LocalFilesystemAdapter).
        // When the extension is absent on the server, fall back to extension-based MIME detection.
        if (! extension_loaded('fileinfo')) {
            Storage::extend('local', function ($app, $config) {
                $visibility = PortableVisibilityConverter::fromArray(
                    $config['permissions'] ?? [],
                    $config['directory_visibility'] ?? $config['visibility'] ?? 'private'
                );

                $links = ($config['links'] ?? null) === 'skip'
                    ? LocalFilesystemAdapter::SKIP_LINKS
                    : LocalFilesystemAdapter::DISALLOW_LINKS;

                $adapter = new LocalFilesystemAdapter(
                    $config['root'],
                    $visibility,
                    LOCK_EX,
                    $links,
                    new ExtensionMimeTypeDetector()
                );

                return new FilesystemAdapter(
                    new Filesystem($adapter),
                    $adapter,
                    $config
                );
            });
        }
    }
}
