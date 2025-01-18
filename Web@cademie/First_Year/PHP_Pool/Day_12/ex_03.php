<?php

function rev_epur_str(string $chaine): mixed
{
    if (empty($chaine)) {
        return false;
    }
    $words = preg_split('/\s+/', trim($chaine));
    return implode(' ', array_reverse($words));
}
