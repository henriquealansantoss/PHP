<?php
$nomeEspaco = "henrique         ";
$nomeSemEspaco = trim($nomeEspaco);
echo $nomeEspaco . "<br>";
echo strlen($nomeEspaco) . "<br>";
echo strlen($nomeSemEspaco) . "<br>";
echo "<br>" . "---------" . "<br>";
echo strtolower($nomeSemEspaco) . "<br>";
echo strtoupper($nomeSemEspaco) . "<br>";

echo str_replace('henrique', 'Santos', $nomeSemEspaco) . "<br>";
echo substr($nomeSemEspaco, 0, 3) . "<br>";


$array = [20, 33, 44, 55, 667, 77];
$nome = 'Henrique Santos';
echo max($array) . "<br>";
echo min($array) . "<br>";
$nomeArray = explode(" ", $nome);
print_r($nomeArray) . "<br>";
echo "<br>" . "---------" . "<br>";
echo ucfirst(str_replace('henrique', 'henrique santos', $nomeSemEspaco)) . "<br>";
echo ucwords($nome, "");
