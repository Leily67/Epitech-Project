<?php
function my_add_to_cookie(string $key, string $value): void
{
    setcookie($key, $value . "toto");
}
