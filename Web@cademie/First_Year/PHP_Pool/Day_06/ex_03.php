<?php
function write_into_my_file(string $str, string $file, bool $append = false): bool
{
    $mode = $append ? "a" : "w";
    $handle = fopen($file, $mode);
    if ($handle) {
        fwrite($handle, $str);
        fclose($handle);
        return true;
    }
    return false;
}
