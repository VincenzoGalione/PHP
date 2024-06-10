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

$post1 = new Post("Titolo1". " ", new Actuality(), "tag1\n");
$post2 = new Post("Titolo2" ." ", new Gossip(), "tag2\n");
$post3 = new Post("Titolo3". " ", new Sport(), "tag3\n");
$post4 = new Post("Titolo4". " ", new History(), "tag4\n");

echo $post1->getCategory();
echo $post1->getTitle();
echo $post1->getTag();

echo $post2->getCategory();
echo $post2->getTitle();
echo $post2->getTag();


echo $post3->getCategory();
echo $post3->getTitle();
echo $post3->getTag();


echo $post4->getCategory();
echo $post4->getTitle();
echo $post4->getTag();














?>