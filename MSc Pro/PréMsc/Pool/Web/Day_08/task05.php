<?php

function calc_average(array $number){
    if(empty($number)){
        return 0;
    }

    $sum = array_sum($number);
    $count = count($number);

    $average = $sum / $count;

    return round($average, 1);
}