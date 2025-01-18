<?php
function my_facto(int $nbr): mixed
{
    if ($nbr < 0) {
        return null;
    }
    $result = 1;
    for ($i = 1; $i <= $nbr; $i++) {
        $result *= $i;
    }
    return $result;
}
