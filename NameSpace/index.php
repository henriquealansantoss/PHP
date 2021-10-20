<?php

// // Exemplo1
// require 'classe1.php';
// require 'classe2.php';

// $classe1 = new classe1\ClasseBase;
// $classe2 = new classe2\ClasseBase;

// echo $classe1->Metodo() . "<br/>";
// echo $classe2->Metodo();


// //Exemplo2

require 'classes/matematica/basica.php';

use classes\matematica\basica as Basica;
//quando nome da classe for o mesmo que irá ser usado não é 
//necessario colocar o 'as Nome'.

$basica = new Basica;

echo $basica->Teste();
