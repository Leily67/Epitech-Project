<?php
function my_sort_int_tab(array &$tab): void
{
    $size = count($tab);
    for ($i = 0; $i < $size - 1; $i++) {
        for ($j = $i + 1; $j < $size; $j++) {
            if ($tab[$i] > $tab[$j]) {
                $temp = $tab[$i];
                $tab[$i] = $tab[$j];
                $tab[$j] = $temp;
            }
        }
    }
}
