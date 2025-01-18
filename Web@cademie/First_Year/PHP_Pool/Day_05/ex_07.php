<?php
function my_reset_session(): void
{
    session_start();
    session_unset();
    session_destroy();
    session_start();
}
