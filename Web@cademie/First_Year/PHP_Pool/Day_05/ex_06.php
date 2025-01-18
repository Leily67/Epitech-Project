<?php
function my_print_session(string $key): void
{
    session_start();
    if (isset($_SESSION[$key])) {
        echo $_SESSION[$key] . "\n\n";
    }
}
