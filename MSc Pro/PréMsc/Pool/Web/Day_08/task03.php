<?php

function get_shortest(array $string){
    if(empty($string)){
        return null;
    }

    $shortest = $string[0];

    foreach($string as $str){
        if (strlen($str) < strlen($shortest)) {
            $shortest = $str;
        }
    }

    return $shortest;

}