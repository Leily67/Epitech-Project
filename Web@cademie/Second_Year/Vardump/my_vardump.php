<?php


function my_vardump(){
    $args = func_num_args();
    for($i=0; $i < $args; $i++){
        $param = func_get_arg($i);
        my_vardump_rec($param, 0);
    }
}

function my_vardump_rec($param, $depth){
    pad($depth);
    switch (gettype($param)){
        case 'string' : 
            my_vardump_string($param);
            break;
        case 'integer' : 
            my_vardump_int($param);
            break;
        case 'double' : 
            my_vardump_float($param);
            break;
        case 'boolean' : 
            my_vardump_bool($param);
            break;
        case 'NULL' : 
            my_vardump_null($param);
            break;
        case 'array' : 
            my_vardump_array($param, $depth);
            break;
    }
}

//fonction string
function my_vardump_string($param){
    $len = strlen($param);
    echo "string($len) " . '"'.$param.'"' . "\n";

}

//fonction integer
function my_vardump_int($param){
    echo "int($param)" . "\n";
}

//fonction float/double
function my_vardump_float($param){
    echo "float($param)" . "\n";
}

//fonction boolean
function my_vardump_bool($param){
    if($param == true){
        echo "bool(true)";
    }else{
        echo "bool(false)";
    }
    echo "\n";
}

//fonction null
function my_vardump_null($param){
    echo "NULL" . "\n";
}


//fonction array
function my_vardump_array($param, $depth){
    $len = count($param);
    echo "array($len) {" . "\n"; 
    foreach ($param as $key => $value) {
        pad($depth+1);
        if(is_string($key)){
            echo "[\"$key\"]=>" . "\n";
        }else {
            echo "[$key]=>" . "\n";
        }
        my_vardump_rec($value, $depth+1);
    }
    pad($depth);
    echo "}" . "\n";
}

//fonction padding
function pad($depth){
    for($i=0; $i < $depth; $i++){
        echo "  ";
    }
}



//my_vardump([null => true, 1 => 42.2, 42.2 => "po", "ntm" => ["ok" => true, 1 => 42.2, 42.2 => "po"]], 0);
//var_dump([null => true, 1 => 42.2, 42.2 => "po", "ntm" => ["ok" => true, 1 => 42.2, 42.2 => "po"]]);