<?php
class Vertebrates{
    public function __construct($vertebrati){  
    }
    
    protected function vertebrato (){
        echo"Sono un animale vertebrato\n";
    }
}

class ColdBlooded extends Vertebrates{
    public function __construct($vertebrati, $sangueFreddo){
    }
    
    protected function sangueFreddo(){
        echo"Sono un animale a Sangue Freddo\n";
    }
}

class Fish extends ColdBlooded{
    public function __construct($vertebrati, $sangueFreddo, $fish){

    }

    protected function fish(){
        echo "Splash!\n";
    }
}


?>