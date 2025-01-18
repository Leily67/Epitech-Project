<?php
function str_beautifuler(string $str): mixed
{
    if (!is_string($str)) {
        return null;
    }
    $words = array_filter(explode(" ", $str));
    $result = [];
    foreach ($words as $word) {
        $word = strtolower($word);
        $word[strlen($word) - 1] = strtoupper($word[strlen($word) - 1]);
        $result[] = $word;
    }
    return implode(" ", $result);
}
