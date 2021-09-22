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

// array_pop remove o ultimo item de um array

$removeLast = array_pop($numeros);

print_r($numeros);

echo '<br>' . "Item removido= " . $removeLast;

echo '<br>' . '--------------' . '<br>';

// array_shift remove o primeiro item de um array

$removeFisrt = array_shift($numeros);
print_r($numeros);

echo '<br>' . "Item removido= " . $removeFisrt;

echo '<br>' . '--------------' . '<br>';

// função para verificar se existe um valor dentro de um array

if (in_array(67, $numeros)) { // pode ser colocado dentro do propro if
    echo "Encontrei!";
} else {
    echo "Não encontrei!";
};

echo '<br>' . '--------------' . '<br>';

// array_search - tb verificar se item existe dentro de um array, 
// e retorna sua posição atual

$pos = array_search(67, $numeros);

echo "Posição atual do valor 67 = " . $pos;

echo '<br>' . '--------------' . '<br>';

// funções para ordernar um array

$num = [2, 4, 8, 1, 9, 3, 6, 5];
echo "numeros sem ordenar: ";
print_r($num);
echo "<br>";
sort($num);
echo "order crescente: ";
print_r($num);
echo "<br>";
echo "order decrescente: ";
rsort($num);
print_r($num);
echo "<br>";
echo "ordenar mantendo o numero da chave= ";
asort($num);
print_r($num);

echo '<br>' . '--------------' . '<br>';

$nomeArray = ['Henrique', 'Alan', 'Santos'];
$nomeCompleto = implode(' ', $nomeArray);
echo $nomeCompleto;
