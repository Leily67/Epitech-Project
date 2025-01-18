<?php
function my_sort_files(array &$tab): void
{
    sort($tab);
    foreach ($tab as $value) {
        echo "$value\n";
    }
}
