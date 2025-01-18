<?php
function rotone(string $string): void
{
    $result = '';
    foreach (str_split($string) as $char) {
        if (ctype_alpha($char)) {
            $result .= $char === 'z' ? 'a' : ($char === 'Z' ? 'a' : chr(ord(strtolower($char)) + 1));
        } else {
            $result .= $char;
        }
    }
    echo $result . "\n";
}
