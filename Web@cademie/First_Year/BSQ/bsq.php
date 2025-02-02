<?php
require_once("matrix.php");

/*
    Ouvre la map et la retourne
*/
function openMap($filename) {
    $rawMap = file_get_contents($filename); // recupère le fichier en variable
    $map = explode("\n", $rawMap); // converti le fichier en tableau
    array_shift($map); // enleve la première ligne
    array_pop($map); // enleve la dernière ligne
    for ($i = 0; $i < getRows($map); $i++) {
        $map[$i] = str_split($map[$i]);
    }
    return $map;
}

/*
    Lis la map et l'affiche ligne par ligne avec des retours à la ligne
*/
function echoMap($map) {
    // parcours les lignes du tableau
    for($y = 0; $y < getRows($map); $y++){
    
        // parcours les colonnes
        for($x = 0; $x < getColumns($map); $x++){
            echo getMatrixValue($map, $x, $y);
        }
        echo "\n";
    }
}

function bsq($map) {

    $numberOfLines = getRows($map);
    $numberOfColumns = getColumns($map);
    $matrix = generateMatrix($numberOfColumns, $numberOfLines, -1);

    $biggestSquare = 1;
    $biggestSquareX = 0;
    $biggestSquareY = 0;

    // 11        00
    // 1? -> 2   0? -> 1
    // parcours les lignes du tableau
    for($y = 0; $y < $numberOfLines; $y++){
    
        // parcours les colonnes
        for($x = 0; $x < $numberOfColumns; $x++){
            
            if (getMatrixValue($map, $x, $y) == "o") {
                $matrix = setMatrixValue($matrix, $x, $y, 0);
            } else {
                // $y - 1
                $a = getMatrixValue($matrix, $x, $y - 1);
                // $x - 1
                $b = getMatrixValue($matrix, $x - 1, $y);
                // $x - 1, $y - 1
                $c = getMatrixValue($matrix, $x - 1, $y - 1);

                // on prend la valeur minimum et on ajoute 1
                $case = min($a, $b, $c) + 1;

                // on met a jour la valeur dans la matrice 
                $matrix = setMatrixValue($matrix, $x, $y, $case);
            }

            // on compare la valeur du plus grand carré trouvé a notre valeur actuelle
            if (getMatrixValue($matrix, $x, $y) > $biggestSquare) {
                // si la valeur actuelle est plus grande on sauvegarde la nouvelle valeur
                $biggestSquare = getMatrixValue($matrix, $x, $y);
                $biggestSquareX = $x;
                $biggestSquareY = $y;
            }
        }
    }    

    for ($x = $biggestSquareX; $x > $biggestSquareX - $biggestSquare; $x--) {
        for ($y = $biggestSquareY; $y > $biggestSquareY - $biggestSquare; $y--) {
            $map = setMatrixValue($map, $x, $y, "x");
        }    
    }

    return $map;
}


$map = openMap($argv[1]);

// trouver le carré le plus grand
$map = bsq($map);

echoMap($map);
