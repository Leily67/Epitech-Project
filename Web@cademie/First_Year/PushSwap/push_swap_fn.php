<?php

$print = [];

//échange les positions des deux premiers éléments de "la" (rien ne se produit s’il n’y a pas assez d’éléments)
function sa(array &$la, array &$lb){
    GLOBAL $print;
    if(count($la) >= 2){
        $temp = $la[0];
        $la[0] = $la[1];
        $la[1] = $temp;
        $print[] = "sa";
    }
}
//échange les positions des deux premiers éléments de "lb" (rien ne se produit s’il n’y a pas assez d’éléments)
function sb(array &$la, array &$lb){
     GLOBAL $print;
     if(count($lb) >= 2){
         $temp = $lb[0];
         $lb[0] = $lb[1];
         $lb[1] = $temp;
         $print[] = "sb";
     }
}

//"sa" et "sb" en même temps
function sc(array &$la, array &$lb){
    GLOBAL $print;
    if(count($la) >= 2 && count($lb) >= 2){
        $temp = $la[0];
        $la[0] = $la[1];
        $la[1] = $temp;
        $temp = $lb[0];
        $lb[0] = $lb[1];
        $lb[1] = $temp;
        $print[] = "sc";
    }
}


//prend le premier élément de "lb" et le place à la première position de "la" (rien ne se produit si lb est vide).
function pa(array &$la, array &$lb){
    GLOBAL $print;
    if(count($lb) >= 1){
        $firstitem = array_shift($lb);
        array_unshift($la, $firstitem);
        $print[] = "pa";
    }
}


//prend le premier élément de "la" et le place à la première position de "lb" (rien ne se produit si 1 la est vide)
function pb(array &$la, array &$lb){
    GLOBAL $print;
    if(count($la) >= 1){
        $firstitem = array_shift($la);
        array_unshift($lb, $firstitem);
        $print[] = "pb";
    }
}

//fait une rotation de "la" vers le début. (le premier élément devient le dernier)
function ra(array &$la, array &$lb){
    GLOBAL $print;
    if(count($la) >= 1){
        array_push($la, $la[0]);
        array_shift($la);
        $print[] = "ra";
    }
}

//fait une rotation de "lb" vers le début (le premier élément devient le dernier)
function rb(array &$la, array &$lb){
    GLOBAL $print;
    if(count($lb) >= 1){
        array_push($lb, $lb[0]);
        array_shift($lb);
        $print[] = "rb";
    }
}


//"ra" et "rb" en même temps
function rr(array &$la, array &$lb){
    GLOBAL $print;
    if(count($la) >= 1 && count($lb) >= 1){
        array_push($lb, $lb[0]);
        array_shift($lb);
        array_push($la, $la[0]);
        array_shift($la);
        $print[] = "rr";
    }
}

//fait une rotation de "la" vers la fin. (le dernier élément devient le premier)
function rra(array &$la, array &$lb){
    GLOBAL $print;
    if(count($la) >= 2){
        array_unshift($la, end($la));
        array_pop($la);
        $print[] = "rra";
    }
}

//fait une rotation de "lb" vers la fin. (le dernier élément devient le premier)
function rrb(array &$la, array &$lb){
    GLOBAL $print;
    if(count($lb) >= 2){
        array_unshift($lb, end($lb));
        array_pop($lb);
        $print[] = "rrb";
    }
}

//"rra" et "rrb" en même temps
function rrr(array &$la, array &$lb){
    GLOBAL $print;
    if(count($la) >= 2 && count($lb) >= 2){
        array_unshift($la, end($la));
        array_pop($la);
        array_unshift($lb, end($lb));
        array_pop($lb);
        $print[] = "rrr";
    }
}

function print_operation() {
    GLOBAL $print;
    echo implode(" ", $print)."\n";
}