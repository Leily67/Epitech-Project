<?php
function print_calls(): void
{
    static $count = 0;
    $count++;
    echo "$count\n";
}
