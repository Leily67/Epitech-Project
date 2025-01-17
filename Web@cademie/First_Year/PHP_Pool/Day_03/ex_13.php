<?php
function my_swap_vars(mixed &$a, mixed &$b): void
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}
