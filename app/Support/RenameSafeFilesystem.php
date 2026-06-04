<?php

namespace App\Support;

use Illuminate\Filesystem\Filesystem;
use RuntimeException;

class RenameSafeFilesystem extends Filesystem
{
    public function replace($path, $content, $mode = null)
    {
        clearstatcache(true, $path);

        if (is_link($path) && ($target = readlink($path)) !== false) {
            $path = $target;
        }

        $this->ensureDirectoryExists(dirname($path));

        if (file_put_contents($path, $content, LOCK_EX) === false) {
            throw new RuntimeException("Unable to write file at path: {$path}");
        }

        if ($mode !== null) {
            @chmod($path, $mode);
        }
    }
}
