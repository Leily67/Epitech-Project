<?php
function sum_rec(int $nbr, int $iteration): mixed
{
    if ($iteration === 0) {
        return $nbr;
    }
    return $nbr + ($iteration > 0 ? $iteration : -abs($iteration)) + sum_rec($nbr, $iteration - ($iteration > 0 ? 1 : -1));
}
