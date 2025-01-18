<?php

function my_sort(array &$tableau): int
{
    static $calls = 0;
    $calls++;
    if (!empty($tableau)) {
        $temp = $tableau[0];
        $tableau[0] = $tableau[count($tableau) - 1];
        $tableau[count($tableau) - 1] = $temp;
    }
    return $calls;
}
