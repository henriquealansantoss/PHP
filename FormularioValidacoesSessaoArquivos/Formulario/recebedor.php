<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);


if ($nome && $email && $idade) {

    $expiracao = time() + (86400 * 30); // 86400 = há um dia - resumindo um dia vezes 30 = hoje mais 30 dias.
    setcookie('nome', $nome, $expiracao);
    //setcookie('nome'/*nome do cookie*/, $nome /*o valor que irá ficar salvo*/, $expiracao)/* tempo para expiração*/;

} else {
    $_SESSION['aviso'] = 'Preencha os itens corretamente!';

    header('Location: index.php');
    exit;
}
