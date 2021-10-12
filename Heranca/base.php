<?php

class Post
{
    private string $nome;
    private int $idade;
    private int $likes;

    public function setNome($i)
    {
        $this->nome = $i;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setIdade($i)
    {
        $this->idade = $i;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setLikes($l)
    {
        $this->likes = $l;
    }
    public function getLikes()
    {
        return $this->likes;
    }
}


