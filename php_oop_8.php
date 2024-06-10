<?php

    trait Operation{
        public function sum ($a, $b){
            return $a + $b;
        }
        
        public function sub ($a, $b){
            return $a - $b;
        }
        
        public function mul ($a, $b){
            return $a * $b;
        }
        
        public function div ($a, $b){
            return $a / $b;
        }
        
        public function sqr ($a){
            return sqrt($numero);
        }   
    }

    class Rettangolo{
        public $base;
        public $altezza;

        public function __construct($a, $b){
            $this->altezza = $a;
            $this->base = $b;
        }
    }

    class Addizione{
        use Operation;
    }

?>