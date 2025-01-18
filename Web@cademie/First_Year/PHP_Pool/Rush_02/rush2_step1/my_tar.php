#!/usr/bin/php
<?php

if ($argc < 2) {
    echo "Usage: php my_tar.php file1 file2 folder1\n";
    exit(1);
}

$outputFile = 'output.mytar';
$filesToArchive = array_slice($argv, 1);

// Écrase le fichier s'il existe déjà
if (file_exists($outputFile)) {
    unlink($outputFile);
}

$archive = fopen($outputFile, 'wb');

// Fonction récursive pour parcourir les fichiers et dossiers
function addToArchive($filePath, $baseDir, $archiveHandle)
{
    if (is_dir($filePath)) {
        $files = scandir($filePath);
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                addToArchive($filePath . DIRECTORY_SEPARATOR . $file, $baseDir, $archiveHandle);
            }
        }
    } elseif (is_file($filePath)) {
        $relativePath = substr($filePath, strlen($baseDir) + 1);
        $fileContent = file_get_contents($filePath);
        $header = [
            'path' => $relativePath,
            'size' => strlen($fileContent),
        ];
        fwrite($archiveHandle, json_encode($header) . "\n");
        fwrite($archiveHandle, $fileContent);
    }
}

foreach ($filesToArchive as $file) {
    $absolutePath = realpath($file);
    if ($absolutePath) {
        addToArchive($absolutePath, dirname($absolutePath), $archive);
    } else {
        echo "File or directory not found: $file\n";
    }
}

fclose($archive);
echo "Archive created: $outputFile\n";
