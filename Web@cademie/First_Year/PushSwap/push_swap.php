#!/usr/bin/env php
<?php

require("push_swap_fn.php");

function argv_la($argv){
    $la = array();
    foreach ($argv as $value){
        array_push($la,(int) $value);
    }
    array_shift($la);
    return $la;
}
 function arraySort($array){
     $a = $array;
     $b = $array;
     sort($b);
     if($a == $b){
         echo "\n";
         return true;
     } else {
         return false;
     }
 }

function push_swap($argv){

    $la = argv_la($argv);
    $lb = [];
    $max = count($la);
    if(!arraySort($la)){

    for ($i = 0; $i < $max; $i++){
    
    // valeur la plus petite de la
    $value = min($la);
    // valeur au debut
    // $la[0] 
    //var_dump($value);
    //var_dump($la[0]);
    
    while($la[0] != $value){
        ra($la, $lb);
    }
    pb($la, $lb);


    //var_dump($value);
    //var_dump($la[0]);

    }
    for($i = 0; $i < $max; $i++ ){
        pa($la, $lb);
    }


    //var_dump($la);
    //var_dump($lb);


    //rra($la, $lb);
    //var_dump($la);
    //var_dump($lb);
    print_operation();
}
}

//chercher élément le plus petit de la list A sans faire d'opération (jusqu'a ce qu'il soit devant puis pb pour envoyer sur la seconde liste)
//

push_swap($argv);