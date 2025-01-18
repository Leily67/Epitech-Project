<?php
function return_calls(): int
{
    static $count = 0;
    $count++;
    return $count * 3;
}
