<?php

setcookie('nome', '', time() - 3600); // fazendo o cookie expirar (dia atual - um minuto).
// o nome do cookie // o valor que irá setar // tempo de expiração.


header('Location: index.php');
exit;
