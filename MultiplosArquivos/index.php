<?php
require_once('header.php');
require('config.php');

echo 'Conteudo do site.......' . "<br>";
echo "Olá " . ucwords($usuario);


// require precisa de um arquivo e não encontrando da erro;
// include continua a execução, porém avisa que não encontrou o arquivo.
//require_once - onde 'once' significa uma unica vez - impedindo que o arquivo seja chamado mais de uma vez.