<?php
// Funções Banco
// leitura
// escrita
// alteração
// remoção

interface DB
{
    public function addProduto();
    public function removerProduto();
    public function alterarProduto();
}

class MySqlDB implements DB
{
    public function addProduto()
    {
        echo 'add com MySqlDB';
    }

    public function removerProduto()
    {
    }

    public function alterarProduto()
    {
    }
}


class OracleDB implements DB
{
    public function addProduto()
    {
        echo 'add com Oracle';
    }

    public function removerProduto()
    {
    }

    public function alterarProduto()
    {
    }
}

$database = new OracleDB();
$database->addProduto();
