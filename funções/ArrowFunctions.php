<?php
// função flecha (Arrow function) v7.4+
echo '--------------------------------' . "<br>";

// 10% de um valor
$flecha = fn ($valor) => $valor * 0.1;
echo $flecha(24);
echo  "<br>".'--------------------------------' . "<br>";

$somar = fn(int $n1, int $n2=20) => $n1+$n2;
echo $somar(30);


