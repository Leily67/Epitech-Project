<?php
function my_count_five(int $number): void
{
    for ($i = 1; $i <= 5; $i++) {
        echo ($number + $i) . "\n";
    }
}
