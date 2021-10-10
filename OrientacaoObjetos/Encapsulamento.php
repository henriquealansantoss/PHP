<?php

class Teste
{
    public int $id;
    public int $likes = 0;  //'int' = Type Properties
    public array $coments = []; //'array' = Type Properties
    private string $author; //'string' = Type Properties - aceita outros tipos e converte para string


    public function aumentarLikes()
    {
        $this->likes++;
    }

    //set
    public function setAuthor($nome)
    {
        $this->author = ucfirst($nome);
    }

    //get
    public function getAuthor()
    {
        return $this->author;
    }
}


$post1 = new Teste();
$post1->setAuthor('Henrique');

echo "Autor: " . $post1->getAuthor();
