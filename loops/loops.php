<?php
echo "--------- loop while ----------" . "<br>";
$a = 0;

while ($a <= 10) {
    echo "Contador = $a" . "<br>";
    $a++;
};

echo "--------- For ----------" . "<br>";
$b = 10;
for ($i = 0; $i <= $b; $i++) {
    echo "numero = $i" . "<br>";
}

echo "---------Foreach ----------" . "<br>";
// Foreach
$array = ['primeiro', 'segundo', 'terceiro', 'quarto'];
foreach ($array as $i) {
    echo $i . "<br>";
};

echo "---------Foreach com chave ----------" . "<br>";

echo "<ul>";
foreach ($array as $chave => $item) {
    echo "<li>"."$chave = $item".'</li>';
};
echo "</ul>";