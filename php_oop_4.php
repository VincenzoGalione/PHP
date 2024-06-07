<?php
    class Car 
    {
        private $num_telaio;
        protected function setCarTelaio($string)
        {
            return $this->num_telaio = $string;
        }
        protected function getCarTelaio()
        {
            return $this->num_telaio;
        }
    }

    class Fiat extends Car {
        protected $license;
        protected $name;

        public function __construct($targa, $nome)
        {
            $this->license = $targa;
            $this->name = $nome;
        }

        public function setMyCarTelaio($string)
        {
            return $this->setCarTelaio($string);
        }

        public function getMyCarTelaio()
        {
            return $this->getCarTelaio();
        }

        public function printMessage(){
            echo "La mia auto è un $this->name con targa $this->license e il suo numero di telaio"." ". $this->getMyCarTelaio() . "\n";
        }
    }

    $car = new Fiat('ND 123 OJ','Opel');
    $car->setMyCarTelaio('1234');
    $car->printMessage();
   





?>