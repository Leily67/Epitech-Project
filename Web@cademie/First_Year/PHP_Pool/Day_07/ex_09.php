<?php
function is_prime(int $nbr): mixed
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
