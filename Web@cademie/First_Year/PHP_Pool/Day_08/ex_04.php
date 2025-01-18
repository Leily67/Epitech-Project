<?php
function clear_and_replace(string $string, string $word): string
{
    $string = trim($string);
    return preg_replace("/\b" . preg_quote($word, '/') . "\b/", "Pangolin", $string, 2);
}
