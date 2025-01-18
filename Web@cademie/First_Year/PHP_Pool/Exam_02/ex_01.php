<?php
function rev_epur_str(string $str = null): mixed
{
    if ($str === null) {
        return false;
    }
    $words = preg_split('/\s+/', trim($str));
    if ($words === false) {
        return false;
    }
    return implode(' ', array_reverse($words));
}
