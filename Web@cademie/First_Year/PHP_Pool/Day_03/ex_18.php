<?php
function get_args(...$args): array
{
    return $args;
}

function get_last_arg(...$args): mixed
{
    return end($args);
}
