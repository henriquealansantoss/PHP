

<?php

// forma 1 
// $lista = [
//     'nome' => 'Henrique',
//     'idade' => 90,
//     'atributos' => [
//         'forca' => 60,
//         'agilidade' => 80,
//         'destreza' => 50
//     ],
//     'vida' => 1000,
//     'mana' => 920
// ];

// echo "NOME: ".$lista['nome']."<br>";
// echo "IDADE: ".$lista['idade']."<br>";
// echo "ATRIBUTOS: ".$lista['atributos']['forca']."<br>";
// echo "AGILIDADE: ".$lista['atributos']['agilidade']."<br>";
// echo "DESTREZA: ".$lista['atributos']['destreza']."<br>";
// echo "VIDA: ".$lista['vida']."<br>";
// echo "MANA: ".$lista['mana'];

// forma 2
$lista = [
    'nome' => 'Henrique',
    'idade' => 90,
    'atributos' => [
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    $vida = 1000,
    $mana = 920
];

echo "NOME: ".$lista['nome']."<br>";
echo "IDADE: ".$lista['idade']."<br>";
echo "ATRIBUTOS: ".$lista['atributos']['forca']."<br>";
echo "AGILIDADE: ".$lista['atributos']['agilidade']."<br>";
echo "DESTREZA: ".$lista['atributos']['destreza']."<br>";
echo "VIDA: ".$vida."<br>";
echo "MANA: ".$mana;