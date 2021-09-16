<?php

//exemplos principais

// valor absoluto
$n1 = -8.4;
echo abs($n1);
echo "<br>" . "-------------------" . "<br>";

// o pi de um valor
echo pi();
echo "<br>" . "-------------------" . "<br>";

// arredondamento para baixo
$n2 = 2.7;
echo floor($n2);
echo "<br>" . "-------------------" . "<br>";

// arredondamento para cima
echo ceil($n2);
echo "<br>" . "-------------------" . "<br>";

// arredondamento que depende do numero]
echo round($n2) . "<br>";
echo round(3.2) . "<br>";
echo round(3.8) . "<br>";;
echo round(12.549819867394673) . "<br>";;
echo round(12.549819867394673, 2); // casas decimais

echo "<br>" . "-------------------" . "<br>";

// gerar numero aleatorio
echo rand(1, 10); // parametros = o minimo e o máximo - irá gerar um numero aleatorio entre esses valores.
echo "<br>" . "-------------------" . "<br>";

// saber qual o maior e o menor numero de uma lista
$lista = [1, 29, 38, 48, 55, 66, 77, 88];
echo max($lista) . "<br>";
echo min($lista);
echo "<br>" . "-------------------" . "<br>";

// lista com todas estão no próprio site do php