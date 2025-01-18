<?php
function print_array_with_key(array $my_array): void
{
    foreach ($my_array as $key => $value) {
        echo "$value : $key\n";
    }
}
