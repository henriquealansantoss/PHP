
<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);


if ($nome && $email && $idade) {
    echo "Olá {$nome}!
    <br>
    Email: {$email}
    <br>
    Idade: {$idade}";
} else {
    header('Location: index.php');
    exit;
}
