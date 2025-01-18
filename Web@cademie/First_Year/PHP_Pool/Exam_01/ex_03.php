<?php
function my_count_chars(string $string, string $letter): int
{
    return substr_count($string, $letter);
}
