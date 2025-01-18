<?php
function my_comb_n(int $n): void
{
    $start = str_repeat("1", $n);
    $end = str_repeat("9", $n);

    for ($i = $start; $i <= $end; $i++) {
        echo $i . "\n";
    }
}
