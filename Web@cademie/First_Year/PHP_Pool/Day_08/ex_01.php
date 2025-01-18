<?php
function which_is_longer(string $str1, string $str2): int
{
    if (!is_string($str1) || !is_string($str2)) {
        return -1;
    }
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    return $len1 >= $len2 ? $len1 : $len2;
}
