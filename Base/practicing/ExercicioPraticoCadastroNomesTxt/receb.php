<?php
$nomeInput = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if (!file_exists('nomes.txt')) {
    file_put_contents('nomes.txt', $nomeInput);
    header('Location: index.php');
} else {
    $nomestxt = file_get_contents('nomes.txt');
    $nomestxt .= "\n$nomeInput";
    file_put_contents('nomes.txt', $nomestxt);

    header('Location: index.php');
}
