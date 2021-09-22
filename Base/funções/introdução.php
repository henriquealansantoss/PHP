<?php

$numero1 = 5;
$numero2 = 5;
$numero3 = 20;
$numero4 = 50;
function somar($numero1,$numero2){
     return $numero1+$numero2;
    };


$s1 = somar($numero3,$numero4);
$s2 = somar($numero1,$numero2);
$s3 = somar($s1,$s2);


echo $s1."<br>";
echo $s2."<br>";
echo $s3."<br>";


