<?php
function print_array(array $array): void
{
    foreach ($array as $key => $value) {
        echo "[$key] => [$value]\n";
    }
}
