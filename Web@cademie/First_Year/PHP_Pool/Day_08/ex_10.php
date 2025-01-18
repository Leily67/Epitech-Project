<?php
function return_calls(): mixed
{
    static $count = 0;
    $count++;
    return $count % 2 === 0 ? $count : null;
}
