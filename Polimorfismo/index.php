<?php

interface full
{
    public function getTipo();
    public function getAcao();
}

class somar implements full
{
    private int $n1;
    private int $n2;

    public function __construct($num1, $num2)
    {
        $this->n1 = $num1;
        $this->n2 = $num2;
    }

    public function getTipo()
    {
        return 'Soma';
    }
    public function getAcao()
    {
        return $this->n1 + $this->n2;
    }
}

class multiplicar implements full
{
    private int $n1;
    private int $n2;

    public function __construct($num1, $num2)
    {
        $this->n1 = $num1;
        $this->n2 = $num2;
    }

    public function getTipo()
    {
        return 'Multiplicação';
    }
    public function getAcao()
    {
        return $this->n1 * $this->n2;
    }
}


$soma = new somar(3, 5);
$multiplicar = new multiplicar(4, 5);

$funcoes = [
    $soma,
    $multiplicar
];


foreach ($funcoes as $fun) {
    $tipo = $fun->getTipo();
    $funcao = $fun->getAcao();

    echo "Tipo: $tipo - Calculo: $funcao" . "<br/>";
}
