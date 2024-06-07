<?php
    class Car {
        private $num_Telaio;

        public function __construct($telaio){
            $this->num_Telaio = $telaio;
        }
    }

    class Fiat extends Car {
        protected $license;
        protected $name;

        public function __construct($telaio, $licenza, $name){
            parent::__construct($telaio);
            $this->license = $licenza;
            $this->name = $name;
        }

        public function currentCar(){
            echo "La mia auto è $this->$name, con targa $this->$license e numero di telaio  $this->$num_Telaio,  ";
        }

    }

    $myCar = new Fiat('opel', '15264cg', 1526);
    $myCar->currentCar();
   





?>