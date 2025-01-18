<?php
function my_pow(int $nb_a, int $nb_b): mixed
{
    if ($nb_b < 0) {
        return null;
    }
    $result = 1;
    for ($i = 0; $i < $nb_b; $i++) {
        $result *= $nb_a;
    }
    return $result;
}
