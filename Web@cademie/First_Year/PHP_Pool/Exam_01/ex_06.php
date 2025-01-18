<?php
function my_sort(array &$array): int
{
    static $call_count = 0;
    $call_count++;

    if (count($array) > 1) {
        $temp = $array[0];
        $array[0] = $array[count($array) - 1];
        $array[count($array) - 1] = $temp;
    }

    return $call_count;
}
