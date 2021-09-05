<?php

echo "----- meu result-------";
$t = '-';
$a = '';
$completo = "";
while ($a <= 20) {
    $completo .= $t;
    echo $completo . "<br>";
    $a++;
}

echo "----- result encontrado -------";

$cont = 1;
while ($cont <= 20) {

    $i = 1;
    while ($i <= $cont) {
        echo "-";
        $i++;
    }
    echo "<br/>";

    $cont++;
}


echo "-- praticando --"."<br>";


for ($i=1; $i <= 20; $i++) { 

   for ($s=0; $s < $i; $s++) { 
       echo "-";
   }
    echo "<br>";
    
};

