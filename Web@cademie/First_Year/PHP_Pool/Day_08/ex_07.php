<?php
function count_char(string $str): array
{
    $result = [];
    foreach (str_split($str) as $char) {
        if ($char !== ' ' && $char !== "\t") {
            $result[$char] = ($result[$char] ?? 0) + 1;
        }
    }
    ksort($result);
    return $result;
}
