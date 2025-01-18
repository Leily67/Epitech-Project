#!/usr/bin/php
<?php

if ($argc < 2) {
    echo "Usage: php my_untar.php archive1.mytar [archive2.mytar ...]\n";
    exit(1);
}

function handleConflict($filePath)
{
    static $overwriteAll = false;
    static $skipAll = false;

    if ($overwriteAll) return true;
    if ($skipAll) return false;

    echo "File exists: $filePath\n";
    echo "Options:\n";
    echo "1. Overwrite\n";
    echo "2. Skip\n";
    echo "3. Overwrite All\n";
    echo "4. Skip All\n";
    echo "5. Quit\n";

    $choice = trim(fgets(STDIN));
    switch ($choice) {
        case '1':
            return true;
        case '2':
            return false;
        case '3':
            $overwriteAll = true;
            return true;
        case '4':
            $skipAll = true;
            return false;
        case '5':
            exit("Extraction aborted.\n");
        default:
            return handleConflict($filePath);
    }
}

foreach (array_slice($argv, 1) as $archive) {
    if (!file_exists($archive)) {
        echo "Archive not found: $archive\n";
        continue;
    }

    $content = file_get_contents($archive);
    $entries = explode("\n", $content);
    foreach ($entries as $entry) {
        if (empty($entry)) continue;
        $header = json_decode($entry, true);
        if ($header && isset($header['path'], $header['size'])) {
            $filePath = $header['path'];
            $fileContent = substr($content, strlen($entry) + 1, $header['size']);
            $content = substr($content, strlen($entry) + 1 + $header['size']);

            if (file_exists($filePath) && !handleConflict($filePath)) {
                continue;
            }

            $dir = dirname($filePath);
            if (!is_dir($dir)) {
                mkdir($dir, 0777, true);
            }

            file_put_contents($filePath, $fileContent);
        }
    }

    echo "Archive extracted: $archive\n";
}
