<?php

interface calculoBasico
{
    public function calculo($num1, $num2);
}

class Somar implements calculoBasico
{

    public function calculo($num1, $num2)
    {
        return $num1 + $num2;
    }
}

class Subtrair implements calculoBasico
{
    public function calculo($num1, $num2)
    {
        return $num1 - $num2;
    }
}

class Multiplicar implements calculoBasico
{

    public function calculo($num1, $num2)
    {
        return $num1 * $num2;
    }
}

class Dividir implements calculoBasico
{

    public function calculo($num1, $num2)
    {
        return $num1 / $num2;
    }
}


class MatBase
{
    private $base;

    public function __construct(calculoBasico $calc)
    {
        $this->base = $calc;
    }

    public function calculo($num1, $num2)
    {
        return $this->base->calculo($num1, $num2);
    }
}



$action = new Multiplicar(0, 0);
$res = new MatBase($action);
echo $res->calculo(30, 70);
