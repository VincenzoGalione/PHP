<?php
    class Car 
    {
        private $num_Telaio;
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
            echo "La mia auto è $this->name con targa $this->license e numero di telaio". $this->getMyTelaio() . "\n";
        }
    }

    $car = new Fiat('1526','Opel');
    $car->setMyCarTelaio('15646516516');
    $car->printMessage();
   





?>