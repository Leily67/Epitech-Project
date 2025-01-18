<?php
function aff_array(array $my_array): int
{
    foreach ($my_array as $value) {
        echo "$value\n";
    }
    return count($my_array);
}
