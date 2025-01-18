<?php
function str_to_wordtab(string $str, string $delim): mixed
{
    if (!is_string($str) || !is_string($delim)) {
        return null;
    }
    return explode($delim, $str);
}
