<?php
function print_until(int $max): bool
{
    if ($max < 0) {
        echo "Boulet !\n";
        return false;
    }
    $i = 0;
    while ($i <= $max) {
        echo "$i\n";
        $i++;
    }
    return true;
}
