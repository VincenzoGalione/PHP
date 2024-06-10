<?php

require_once('class.php');

class Post{
    private $title;
    private $category;
    private $tag;

    public function __construct($_titolo, Category $_categoria, $_tag){
        $this->title = $_titolo;
        $this->category = $_categoria;
        $this->tag = $_tag;

    }
    public function getTitle(){
        return $this->title;
    }

    public function getCategory(){
        return $this->category->getMyCategory();
    }

    public function getTag(){
        return $this->tag;
    }
}

$post1 = new Post("Titolo 1\n", new Actuality(), "tag 1\n");
$post2 = new Post("Titolo 2\n", new Gossip(), "tag 2\n");
$post3 = new Post("Titolo 3\n", new Sport(), "tag 3\n");
$post4 = new Post("Titolo 4\n", new History(), "tag 4\n");

echo $post1->getCategory();
echo $post2->getTitle();
echo $post3->getTag();











?>