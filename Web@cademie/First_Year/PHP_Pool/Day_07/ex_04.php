<?php
function my_pow_rec(int $nbr, int $power): mixed
{
    if ($power < 0) {
        return null;
    }
    if ($power === 0) {
        return 1;
    }
    return $nbr * my_pow_rec($nbr, $power - 1);
}
