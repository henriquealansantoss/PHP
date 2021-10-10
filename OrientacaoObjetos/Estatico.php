<?php

class Matematica
{

    public static string $nome = 'Henrique';

    public static function soma($n1, $n2)
    {
        return $n1 * $n2;
    }
}



echo Matematica::soma(10, 10);
echo Matematica::$nome;
