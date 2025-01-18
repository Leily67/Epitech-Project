<?php
function make_it_rain(array &$my_array): void
{
    foreach ($my_array as &$value) {
        $value = "rain";
    }
}
