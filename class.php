<?php


abstract class Category{
    
    abstract public function getMyCategory();

}

class Actuality extends Category{

    public function getMyCategory(){
        return "Attualità\n";
    }
}

class Sport extends Category{
    public function getMyCategory(){
        return "Sport\n";
    }
}

class Gossip extends Category{
    public function getMyCategory(){
        return "Gossip\n";
    }
}

class History extends Category{
    public function getMyCategory(){
        return "Storia\n";
    }
}


$attualità = new Actuality();
// echo $attualità->getMyCategory();

$sport = new Sport();
// echo $sport->getMyCategory();

$notizie= new Gossip();
// echo $notizie->getMyCategory();

$storia = new History();
// echo $storia->getMyCategory();











?>