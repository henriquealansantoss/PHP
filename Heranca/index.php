<?php
require('base.php');

class Dados extends Post
{
    public string $teste;


    public function __construct($n)
    {
        $this->setNome($n);
    }

    public function Teste()
    {
        $this->teste = 'Teste';
    }
}


$t = new Dados("Henrique");
$t->setNome("Henrique");
echo $t->getNome() . " Teste" . $t->Teste();
