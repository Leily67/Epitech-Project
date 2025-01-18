<?php
function get_median(array $vals): mixed
{
    sort($vals);
    $count = count($vals);
    if ($count % 2 === 1) {
        return $vals[floor($count / 2)];
    }
    return ($vals[$count / 2 - 1] + $vals[$count / 2]) / 2;
}
