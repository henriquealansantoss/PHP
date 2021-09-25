<?php
session_start();
require_once('./template/header.php');


if ($_SESSION['nome']) {
    echo "Olá, " . ucwords($_SESSION['nome']);
} else {
    header('Location: login.php');
    exit;
}

?>

<a href="Sair.php">Sair</a>