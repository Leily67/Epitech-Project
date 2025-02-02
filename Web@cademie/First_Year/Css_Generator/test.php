<?php


/*
    table => table de multiplication a générer
    nb => nombre de multiple a générer
*/
function multiple($table, $nb){

   $a = array();
    for ($i = 1; $i <= $nb; $i++) {
        echo $i * $table."\n";
        $a[] = $i * $table;
    } 

    return $a;
    
}
var_dump(multiple(5,10));

function my_scandir() {
}

function css_generator() {

}

function merge_images() {

}


/*

- lister les images dans un dossier
- fusionne les images
- génère le css

*/
