<?php
function goto_is_evil(): void
{
    $i = 0;
    start:
    if ($i < 42) {
        echo "wac\n";
        $i++;
        goto start;
    }
}
