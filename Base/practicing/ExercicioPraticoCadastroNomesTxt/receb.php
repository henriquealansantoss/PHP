<?php
session_start();
$nomeInput = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if (!file_exists('nomes.txt')) {
    file_put_contents('nomes.txt', $nomeInput);
    header('Location: index.php');
} else {
    $nomestxt = file_get_contents('nomes.txt');
    $arrayNomes = explode("\n", $nomestxt);
    if (in_array($nomeInput, $arrayNomes)) {
        $_SESSION['erro'] = '<p id="aviso">O nome informado já existe na lista!</p>';
    } else {
        $nomestxt .= "\n$nomeInput";
        file_put_contents('nomes.txt', $nomestxt);
    }


    header('Location: index.php');
}

?>

<!-- <p class="aviso">O nome informado já existe na lista!</p> -->