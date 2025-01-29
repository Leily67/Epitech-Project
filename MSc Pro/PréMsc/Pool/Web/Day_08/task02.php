<?php
function dog_bark(int $woof_nb) {
    if($woof_nb <= 0){
        echo "\n";
    }else {
        echo str_repeat("woof ", $woof_nb - 1) . "woof\n";
    }
}