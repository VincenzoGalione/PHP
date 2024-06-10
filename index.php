<?php

class Post{
    public $title;
    public $category;
    public $tag;

    public function __construct($_title, Category $_category, $_tag){
        $this->title = $_title;
        $this->category = $_category;
        $this->tag = $_tag;

    }

}

abstract class Category{
    
    abstract public function getMyCategory();

}









?>