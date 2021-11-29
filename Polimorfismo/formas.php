<?php

use multiplicar as GlobalMultiplicar;
use somar as GlobalSomar;

interface full
{
}

class somar
{
    private float $n1;
    private string $n2;

    public function __construct($num1, $num2)
    {
        $this->n1 = $num1;
        $this->n2 = $num2;
    }

    public function getNum()
    {
        return $this->n1 + $this->n2;
    }

    public function getAcao()
    {
        return 'Soma';
    }
}


class multiplicar
{
    private float $n1;
    private string $n2;

    public function __construct($num1, $num2)
    {
        $this->n1 = $num1;
        $this->n2 = $num2;
    }

    public function getNum()
    {
        return $this->n1 + $this->n2;
    }

    public function getAcao()
    {
        return 'Multiplicação';
    }
}

$soma = new somar(30, 20);
$mult = new multiplicar(3, 6);

$funcoes = [
    $soma,
    $mult
];

foreach ($funcoes as $funcao) {
    $res = $funcao->getNum();
    $acao = $funcao->getAcao();

    echo "A Ação é $acao e o resultado é $res" . "<br/>";
}
