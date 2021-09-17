<?php

$listaNomes = ['henrique', 'denise', 'diego', 'erika', 'diogo', 'enzo', 'daniel'];
$listaNomes2 = ['diogo', 'enzo', 'daniel'];

// contagem de itens na lista
echo 'Total em lista = ' . count($listaNomes) . ' nomes em lista';

echo '<br>' . '--------------' . '<br>';

// itens da primeira lista que não estão na segunda lista

$nomesNot = array_diff($listaNomes, $listaNomes2);
echo 'Nomes não encontrados na segunda lista = ';
print_r($nomesNot);

echo '<br>' . '--------------' . '<br>';

// filtrar no array e gerar um novo array - filter
$numeros = [23, 45, 67, 89, 12, 34, 89, 98];

$filtronum = function ($num) {
    if ($num % 2 === 0) {
        return true;
    } else {
        return false;
    }
};
$pares = array_filter($numeros, $filtronum); // tbm pode ser callback

echo 'Array números pares: ';
print_r($pares);

echo '<br>' . '--------------' . '<br>';

// filtro para executar algua coisa - map
// para cada item ee vai rodar essa função

$multiplicacao = array_map(function ($num) {
    return $num * 2;
}, $numeros);

echo "multiplicação de números ";
print_r($multiplicacao);

echo '<br>' . '--------------' . '<br>';