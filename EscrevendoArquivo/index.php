<?php

$texto = file_get_contents('nome.txt');
$texto .= "\n Denise Dias";
file_put_contents('nome.txt', $texto);


echo $texto;
