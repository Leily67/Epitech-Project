<?php

function cesar2(string $chaine): void
{
    $result = '';
    foreach (str_split($chaine) as $char) {
        if (ctype_alpha($char)) {
            $ascii = ord($char);
            $offset = ctype_lower($char) ? 97 : 65;
            $newChar = chr((($ascii - $offset + 2) % 26) + $offset);
            $result .= ctype_lower($char) ? strtolower($newChar) : strtolower($newChar);
        } else {
            $result .= $char;
        }
    }
    echo $result . "\n";
}
