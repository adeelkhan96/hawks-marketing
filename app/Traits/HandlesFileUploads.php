<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;

trait HandlesFileUploads
{
    /**
     * Save a Livewire temporary upload to a public directory.
     * Uses copy() rather than move()/rename() for compatibility with cPanel
     * shared hosting where rename() across storage→public_html can silently fail.
     */
    protected function saveUpload($file, string $dir, string $filename): string
    {
        File::ensureDirectoryExists($dir, 0755, true);

        $destination = rtrim($dir, '/') . '/' . $filename;
        $source      = $file->getRealPath();

        if (! @copy($source, $destination)) {
            // Last-resort fallback: read bytes and write
            file_put_contents($destination, file_get_contents($source));
        }

        return $destination;
    }

    protected function deleteUpload(string $relativePath): void
    {
        $full = public_path($relativePath);
        if ($full && file_exists($full)) {
            @unlink($full);
        }
    }
}
