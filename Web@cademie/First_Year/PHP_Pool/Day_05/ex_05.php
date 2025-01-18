<?php
function my_add_to_session(string $key, string $value): void
{
    session_start();
    $_SESSION[$key] = $value . "titi";
}
