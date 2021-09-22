<?php

// limpa espaços vazios de string
$nomeComEspacos = '     Henrique  ';
$nomeSemEspacos = trim($nomeComEspacos);

// srtlen - conta a qtd de caracteres
echo $nomeComEspacos . ". Nome com espaços: " . strlen($nomeComEspacos) . '<br>';
echo $nomeSemEspacos . ". Nome sem espaços: " . strlen($nomeSemEspacos) . '<br>';

echo '<br>' . "----------------" . '<br>';

// alterar string para minuscula
$nomeMaiusculo = 'HENRIQUE';
$nomeMinusculo = 'henrique';

echo strtolower($nomeMaiusculo) . "<br>";
echo strtoupper($nomeMinusculo) . "<br>";

//substituir uma palavra
$nomealterado = str_replace('henrique', 'Henrique Santos', $nomeMinusculo);
echo $nomealterado . "<br>";

echo '<br>' . "----------------" . '<br>';

// substr - informa dois até dois pontos dentro do ranger especificado
echo substr($nomealterado, 1, 9) . "<br>";
echo substr($nomealterado, -8, 8); // invertido

echo '<br>' . "----------------" . '<br>';

// procura determinada palavra dentro de uma string e retorna a posição
$posicao = stripos($nomealterado, 'r');
echo $posicao . "<br>";

// o 0 'zero' e o false se confundem no PHP, *usar '>-1' para comparações.
if ($posicao > -1) {
    echo 'Encontrou!';
} else {
    echo 'Não Econtrou!';
}
echo '<br>' . "----------------" . '<br>';

// transformar apenas a primeira letra em maiuscula
$nomeCompletoMin = 'henrique santos';

echo ucfirst($nomeCompletoMin) . '<br>';
echo ucwords($nomeCompletoMin);

echo '<br>' . "----------------" . '<br>';

// tranformar cada palavra em um item de um array
$nomes = explode(" ", $nomeCompletoMin);
print_r($nomes);
echo '<br>' . "----------------" . '<br>';


// formatar um numero
$number = 12633.123;

echo number_format($number,2,',','.'); // 1.233,12

// lista com todas estão no próprio site do php 'Documentação'