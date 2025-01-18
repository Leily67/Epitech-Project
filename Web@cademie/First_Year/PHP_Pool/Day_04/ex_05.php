<?php
function print_range(int $min): bool
{
    do {
        echo "$min\n";
        $min++;
    } while ($min <= 42);
    return $min === 43;
}
