<?php
function get_array_key(array $arr, mixed $value): mixed
{
    return array_search($value, $arr, true);
}
