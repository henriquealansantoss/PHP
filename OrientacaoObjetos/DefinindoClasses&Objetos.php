<?php

// criando uma classe de posts
class Post
{
    public int $likes = 0;  //'int' = Type Properties
    public  array $coments = []; //'array' = Type Properties
    public string $author; //'string' = Type Properties - aceita outros tipos e converte para string

    public function __construct()
    {
        echo 'teste';
    }
     // o construtor é rodado sempre que um objeto é criado.

    //metodos
    public function aumentarLikes()
    {
        $this->likes++;
    }
}

// criando um objeto
$post1 = new Post();

//criando o post 1
$post1->likes = 3;

//usando o metodo
$post1->aumentarLikes();
$post1->aumentarLikes();


$post2 = new Post();
$post2->likes = 5;


echo "Likes do post 1 = $post1->likes" . "<br>";
echo "Likes do post 2 = $post2->likes";
