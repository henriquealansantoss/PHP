
<?php 
 // variaveis
    $nome = 'Henrique';
    $sobrenome = 'Santos';
    $idade = 29;
    $dormindo = false;
    $vazia = null;
    

    //Formas de concatenar

    // $nomeCompleto = $nome.' '.$sobrenome;
    // $nomeCompleto = $nome.$sobrenome;
    $frase = "$nome $sobrenome tem $idade anos";

    $nomeCompleto = $nome;
    $nomeCompleto .= $sobrenome; 
    echo $nomeCompleto."<br>";



//Array
$numeros = [1,2,3,4];
echo $numeros[0]."<br>";
// print_r($numeros);
//var_dump($numeros);

echo "numero 1:".$numeros[0]."<br>";
echo "numero 2:".$numeros[1]."<br>";

//Array Spread
$numeros2 = [
    0,
    ...$numeros,
    5,6,7,8
];

print_r($numeros2);



