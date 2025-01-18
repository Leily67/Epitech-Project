<?php
function my_generate_file(string $name): bool
{
    $filename = $name . ".txt";
    $file = fopen($filename, "w");
    if ($file) {
        fclose($file);
        return true;
    }
    return false;
}
