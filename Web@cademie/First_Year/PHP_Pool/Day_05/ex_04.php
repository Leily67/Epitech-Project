<?php
function my_print_cookie(string $key): void
{
    if (isset($_COOKIE[$key])) {
        echo $_COOKIE[$key] . "_END\n";
    }
}
