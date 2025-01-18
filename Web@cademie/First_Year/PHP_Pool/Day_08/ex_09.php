<?php
function make_pangolins(array &$my_array): void
{
    foreach ($my_array as &$value) {
        $value = "pangolin";
    }
}
