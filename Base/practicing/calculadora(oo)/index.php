<?php

require('calculadora.php');


$calc = new calculadora;

$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multplic(3);
$calc->div(2);
$calc->add(0.5);

echo "Total: " . $calc->total();

$calc->clear();
