<?php
function sum_it(int $nbr, int $iteration): mixed
{
    if (!is_int($nbr) || !is_int($iteration)) {
        return null;
    }
    $result = $nbr;
    $step = $iteration > 0 ? 1 : -1;
    for ($i = abs($iteration); $i > 0; $i--) {
        $result += $step * $i;
    }
    return $result;
}
