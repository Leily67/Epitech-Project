<?php
function display_names(...$params): array
{
    return [
        basename($_SERVER['SCRIPT_NAME']),
        null,
        null,
        count($params),
        count($params) % 2 === 0 ? 1 : 0
    ];
}
