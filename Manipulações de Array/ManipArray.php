
<?php
// ArrayRange -- 
// numeros
echo 'Números' . '<br>';
$arrayRange = range(2, 10, 2);


foreach ($arrayRange as $chave => $item) {
    echo "chave $chave = $item" . "<br>";
};
echo '<br>' . '--------------' . '<br>';

//letras
echo 'Letras' . '<br>';
$arrayRangeLetras = range('a', 'd');

foreach ($arrayRangeLetras as $key => $letra) {
    echo "chave $key = $letra" . "<br>";
}

echo '<br>' . '--------------' . '<br>';

//key_exists - verifica se existe a chave dentro de um array
echo 'array_key_exists' . '<br>';

$array = [
    'nome' => 'Henrique',
    'idade' => 90,
    'empresa' => 'MarteLab',
    'cor' => 'Azul',
    'profissao' => 'Dev'
];


if (!key_exists('idade', $array)) {
    echo 'Não existe essa informação!';
} else {
    echo "Idade informada: " . $array['idade'] . " anos.";
}

echo '<br>' . '--------------' . '<br>';

//array_keys e array_values


$array2 = [
    'nome' => 'Henrique',
    'idade' => 90,
    'empresa' => 'MarteLab',
    'cor' => 'Azul',
    'profissao' => 'Dev'
];

echo 'Print_r' . '<br>';
print_r($array2);
echo '<br>';

echo 'array_keys' . '<br>';
$chaves = array_keys($array2);
print_r($chaves); // retorna um novo array e as chaves ficam no lugar dos valores. 

echo '<br>';

echo 'array_values' . '<br>';
$values = array_values($array2);
print_r($values); // retorna um novo array com o valores sem as chaves originais.

echo '<br>' . '--------------' . '<br>';

echo 'array_slice' . '<br>';

$retorno = array_slice($array2, 2, 3);
print_r($retorno);

echo '<br>' . '--------------' . '<br>';

echo 'array_splice' . '<br>';
// remover ou substituir uma valor de um array

array_splice($array2, 2, 1);
print_r($array2);
echo '<br>';

array_splice($array2, 0, 1, 'Nome adicionado');
print_r($array2);
echo '<br>';

array_splice($array2, 2, 2, ['Nome1', 'Nome2']);
print_r($array2);

echo '<br>' . '--------------' . '<br>';

echo 'array_reduce' . '<br>';

$numeros = [2, 3, 4, 5, 6];

$result = array_reduce($numeros, function ($sub, $item) {
    $sub += $item;
    return $sub;
}, 0);

echo $result;

echo '<br>' . '--------------' . '<br>';

echo 'list' . '<br>';

$arrayPessoa = ['Henrique', 29, 'preto', '80'];

list($nome, $idade, $cor, $quilos) = $arrayPessoa;

echo "Meu nome é $nome, tenho $idade anos e peso $quilos kgs";

