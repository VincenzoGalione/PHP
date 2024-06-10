<?php 

    class Armor{
        public $armSx;
        public $armDx;
        public $legs;
        public static $counter = 0;

        public function __construct(Arm $_armSx, Arm $_armDx, Legs $_legs){
            $this->armDx = $_armDx;
            $this->armSx = $_armSx;
            $this->legs = $_legs;
            self::$counter++;
        }

        public function attaccare(string $side = "dx"){
            if ($side == "sx"){
                $this->armSx->attacco();
            }
            else if($side == "dx"){
                $this->armDx->attacco();
            }
            else{
                echo "Comando non valido\n";
            }
        }

        public function movimento(){
            $this->legs->muoviti();
        }
    }

    // attacco
    abstract class Arm{
        abstract public function attacco();
    }

    class Cannoni extends Arm{
        public function attacco(){
            echo "Cannoni repulsori ausiliari attivi\n";
        }
    }

    class Lame extends Arm{
        public function attacco(){
            echo "Lame metalliche attivate\n";
        }
    }

    class Laser extends Arm{
        public function attacco(){
            echo "Raggi laser in azione\n";
        }
    }

    class Proiettili extends Arm{
        public function attacco(){
            echo "Proiettili all'uranio impoverito, davvero potenti!\n";
        }
    }

    class Gas extends Arm{
        public function attacco(){
            echo "Gas lacrimogeno per poter scappare nei momenti di bisogno\n";
        }
    }


    // movimento
    abstract class Legs{
        abstract public function muoviti();
    }

    class Booster extends Legs{
        public function muoviti(){
            echo "Booster repulsore attivo, Volo via! \n";
        }
    }

    class Morse extends Legs{
        public function muoviti(){
            echo "Morse a terra, non mi muovo di un centimetro \n";
        }
    }

//    $silverCenturion = new Armor (new Cannoni, new Lame, new Booster);

//    $silverCenturion->movimento();
//    $silverCenturion->attaccare();
//    $silverCenturion->attaccare("sx");
   






?>