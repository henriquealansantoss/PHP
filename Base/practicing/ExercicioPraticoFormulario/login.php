<?php
session_start();
require_once('./template/header.php');
$_SESSION['name'] = '';


if (isset($_SESSION['aviso'])) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}

?>
<form method="POST" action="recebe.php">
    <label>Qual seu nome?<br>
        <input type="text" name="nome" id="nome" />
    </label>
    <input type="submit" value="Enviar" />
</form>