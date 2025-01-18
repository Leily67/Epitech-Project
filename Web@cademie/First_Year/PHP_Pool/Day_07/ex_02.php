<?php
function my_facto_rec(int $nbr): mixed
{
    if ($nbr < 0) {
        return null;
    }
    if ($nbr === 0) {
        return 1;
    }
    return $nbr * my_facto_rec($nbr - 1);
}
