<?php
class Vertebrate{
    public function __construct(){  
        $this->printVertebrate();
    }
    
    protected function printVertebrate (){
        echo"Sono un animale vertebrato\n";
    }
}

class Warmblood extends Vertebrate{
    public function __construct(){
     parent::__construct();
     $this->printWarmBlood();
    }

    protected function printWarmBlood(){
        echo "Sono un animale a Sangue Caldo\n";
    }
}


class ColdBlood extends Vertebrate{
    public function __construct(){
        parent::__construct();
        $this->printColdBlood();
    }
    
    protected function printColdBlood(){
        echo"Sono un animale a Sangue Freddo\n";
    }
}

class Mammal extends Warmblood {
    public function __construct(){
        parent::__construct();
        $this->printMammal();
    }

    protected function printMammal(){
        echo "Sono un mammifero\n";
    }  
}

class Bird extends Warmblood {
    public function __construct(){
        parent::__construct();
        $this->printBird();
    }

    protected function printBird(){
        echo "Sono un uccello\n";
    }
}

class Fish extends ColdBlood{
    public function __construct(){
        parent::__construct();
        $this->printFish();
    }

    protected function printFish(){
        echo"Splash!\n";
    }
}

class Reptile extends Coldblood {
    public function __construct(){
        parent::__construct();
        $this->printReptile();
    }

    protected function printReptile(){
        echo "Sono un rettile\n";
    }
}

class Amphibian extends Coldblood{
    public function __construct(){
        parent::__construct();
        $this->printAmphibian();
    }
    
    protected function printAmphibian(){
        echo"Sono un anfibio\n";
    }
}

$magikarp = new Fish();



?>