<?php
session_start();
require('header.php');

if ($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}



?>
<a href="apagar.php">ApagarCookie</a><br><br>


<form method="POST" action="recebedor.php">
    <label>Nome:<br>
        <input type="text" name="nome" id="nome" />
    </label>
    <br><br>
    <label> E-mail: <br>
        <input type="email" name="email" id="email" />
    </label>
    <br><br>
    <label> Idade: <br>
        <input type="text" name="idade" id="idade" />
    </label>
    <br>
    <br>
    <input type="submit" value="Enviar" />
</form>