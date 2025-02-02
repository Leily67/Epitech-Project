<?php

function generateMatrix($x, $y, $nb) {
    $matrix = [];
    // génère la hauteur
    for ($i = 0; $i < $y; $i++) {
        
        // on crée la ligne
        $line = [];
        
        // on rempli la ligne
        for ($j = 0; $j < $x; $j++) {
            
            array_push($line, $nb);

        }

        // ajouter la ligne a la matrice
        array_push($matrix, $line);
    }


    return $matrix;
}

// x = nb de colonnes
// y = nb de lignes


// retourne le nombre de colonnes 
function getColumns($matrix) {
    return count($matrix[0]);
}

// retourne le nombre de lignes
function getRows($matrix) {
    return count($matrix);
}

function getMatrixValue($matrix, $x, $y){
    if($y < 0) {
        return 0;
    } elseif($x < 0) {
        return 0;
    }
    return $matrix[$y][$x];

}

function setMatrixValue($matrix, $x, $y, $value) {
    $matrix[$y][$x] = $value;

    return $matrix;
}
