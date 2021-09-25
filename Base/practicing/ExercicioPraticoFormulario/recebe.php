<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

if ($nome) {
    $_SESSION['nome'] = $nome;
    header('Location: index.php');
} else {
    $_SESSION['aviso'] = 'Infome seu nome!';
    header('Location: login.php');
    exit;
}
