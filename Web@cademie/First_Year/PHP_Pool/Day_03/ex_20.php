<?php
function spupof(string $str): void
{
    $result = '';
    foreach (str_split($str) as $char) {
        if (ctype_alpha($char)) {
            $is_upper = ctype_upper($char);
            $char = chr((ord(strtolower($char)) - 97 + 1) % 26 + 97);
            if ($is_upper) $char = strtoupper($char);
        }
        $result .= $char;
    }
    echo "$result\n";
}
