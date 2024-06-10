<?php
// Jeegrobot => con componenti modulari
//  2 braccia 
// gambe

    class Jeeg{
        public $armSx; //attacco
        public $armDx; // attacco
        public $legs; // movimento

        public function __construct(Arm $_armSx, Arm $_armDx, Legs $_legs){  //DEPENCY INJECTION
                                                               //OBJECT COMPOSITION
            $this->armSx = $_armSx;
            $this->armDx = $_armDx;
            $this->legs = $_legs;
        }

        // public function attaccareSx(){
        //     $this->armSx->attacco();
        // }

        // public function attaccareDx(){
        //     $this->armDx->attacco();
        // }

        public function attaccare(string $side = 'dx'){

            if ($side == 'sx') {
                $this->armSx->attacco();
            }
            else if ($side == 'dx'){
                $this->armDx->attacco();
            }
            else{
                echo "Operazione non valida\n";
            }

        }

        public function movimento(){
            $this->legs->muoviti();
        }
    }
    
    // attacco
    abstract class Arm {
        abstract public function attacco();
    }

    class PugnoFerro extends Arm {

        public function attacco(){
        echo "Ti prendo a mazzate\n";
        }
    }
    

    class Trivella extends Arm {

        public function attacco(){
        echo "Ti buco il petto\n";
        }
    }

    // movimento
    abstract class Legs {
       abstract public function muoviti();
    }

    class Cingoli extends Legs {
        public function muoviti(){
            echo "Mi muovo su qualsiasi terreno\n";
        }
    }

    class Razzi extends Legs {
        public function muoviti(){
            echo "Volo su di te\n";
        }
    }


    $jeeg1 = new Jeeg (new PugnoFerro, new Trivella , new Razzi);
    $jeeg2 = new Jeeg (new Trivella, new PugnoFerro , new Cingoli);


    
    // $jeeg
    // ->armSx // mi trovo in un oggetto di classe PugnoFerro
    // ->attacco(); 
    
    //    jeeg->armSx->attacco();

    $jeeg1->movimento();


    $jeeg2->movimento();
    $jeeg2->attaccare('sx');
    $jeeg2->attaccare('sx');
    $jeeg2->attaccare('pippo');
    $jeeg2->attaccare();
    $jeeg2->movimento();




?>