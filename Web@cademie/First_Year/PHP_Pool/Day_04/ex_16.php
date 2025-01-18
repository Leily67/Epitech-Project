<?php
function print_double_array(array $my_array): void
{
    foreach ($my_array as $sub_array) {
        foreach ($sub_array as $value) {
            echo "$value\n";
        }
    }
}
