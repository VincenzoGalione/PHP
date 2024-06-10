<?php


abstract class Category{
    
    abstract public function getMyCategory();

}

class Actuality extends Category{
    public function getMyCategory(){
        echo " Sono l'attualità\n";
    }
}

class Sport extends Category{
    public function getMyCategory(){
        echo " Sono lo sport\n";
    }
}

class Gossip extends Category{
    public function getMyCategory(){
        echo " Sono il gossip\n";
    }
}

class Story extends Category{
    public function getMyCategory(){
        echo " Sono la storia\n";
    }
}


$giornale = new Category (new Sport);








?>