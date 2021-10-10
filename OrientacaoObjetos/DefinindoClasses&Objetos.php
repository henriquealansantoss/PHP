<?php

// criando uma classe de posts
class Post
{
    public int $id;
    public int $likes = 0;  //'int' = Type Properties
    public  array $coments = []; //'array' = Type Properties
    public string $author; //'string' = Type Properties - aceita outros tipos e converte para string

    public function __construct($postId)
    {
        $this->id = $postId;
        //consultar banco de dados pegar informaçções do Post $id
        $this->likes = 12;
    }
    // o construtor é rodado sempre que um objeto é criado.
    // tudo que deve ser rodado antes da criação do objeto.

    //metodos
    public function aumentarLikes()
    {
        $this->likes++;
    }
}

// criando um objeto
$post1 = new Post(1);

//criando o post 1
$post1->likes = 3;

//usando o metodo
$post1->aumentarLikes();

$post2 = new Post(2);
$post2->likes = 5;


echo "Likes do post 1 = $post1->likes" . "<br>";
echo "Likes do post 2 = $post2->likes";
