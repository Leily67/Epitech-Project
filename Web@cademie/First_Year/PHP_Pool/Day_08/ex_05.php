<?php
function str_lower_epur(string $str): mixed
{
    if (!is_string($str)) {
        return null;
    }
    $words = array_filter(explode(" ", $str));
    return implode(" ", array_map(function ($word) {
        return strtolower(substr($word, 0, -1)) . strtoupper(substr($word, -1));
    }, $words));
}
