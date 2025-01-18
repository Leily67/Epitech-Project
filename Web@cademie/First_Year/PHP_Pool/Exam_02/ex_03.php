<?php
function resum_join_str(string $str1 = null, string $str2 = null): mixed
{
    if ($str1 === null || $str2 === null) {
        return false;
    }

    $part1 = substr($str1 . str_repeat('.', 14), 0, 14);
    $part2 = substr(str_repeat('.', 3) . $str2, -3);

    return $part1 . $part2;
}
