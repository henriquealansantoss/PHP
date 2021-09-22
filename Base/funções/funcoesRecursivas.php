<?php

// função recursiva - função que usa ela mesma 
function dividir($valorCheio){
    $metade = $valorCheio / 2;
    echo $metade . '<br>';
    if (round($metade) > 0) {
        dividir($metade);
    }
}


dividir(5000);
