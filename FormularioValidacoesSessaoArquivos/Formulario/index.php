<?php
require_once('header.php');
?>

<form method="POST" action="recebedor.php">
    <label>Nome:<br>
        <input type="text" name="nome" id="nome" />
    </label>
    <br><br>
    <label> Idade: <br>
        <input type="text" name="idade" id="idade" />
    </label>
    <br>
    <br>
    <input type="submit" value="Enviar" />
</form>