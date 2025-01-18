<?php
function get_next_prime(int $nbr): mixed
{
    if (!is_int($nbr)) {
        return null;
    }
    while (!is_prime($nbr)) {
        $nbr++;
    }
    return $nbr;
}

function is_prime(int $nbr): bool
{
    if ($nbr <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($nbr); $i++) {
        if ($nbr % $i === 0) {
            return false;
        }
    }
    return true;
}
