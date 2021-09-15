<?php

//aula 01
// function teste1(int $n1, int $n2 = 10, int $n3 = 6){
//     return $n3 + $n2 * $n1;
// };

// $res = teste1(3, 4);

// echo $res;


// //aula 02

function somar($x, $y)
{
    $valor = $x * $y;
    return $valor;
};

function valores($x = 10, $y = 10)
{
    return somar($x, $y);
};

//$v1= 20;
$v2 = 30;


$valor = valores($v2);


echo $valor . "<br>";


// por referencia 

function teste($n1, $n2, &$teste)
{
    $teste = $n1 + $n2;
};

$x = 10;
$y = 10;
$teste = 0;

teste($x, $y, $teste);
echo $teste . "<br>";

// função anonima

$anonima = function (string $nome, string $sobrenome) {
    return $nome . " " . $sobrenome;
};

$retorno = $anonima('Henrique', 'Santos');

echo $retorno . "<br>";



