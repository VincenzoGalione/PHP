<?php

class Company{

    public $name;
    public $location;
    public $tot_employees;
    public static $avg_salary = 1500;
    public static $total = 0;


    public function __construct($nome,$sede,$dipendenti){
        $this->name = $nome;
        $this->location = $sede;
        $this->tot_employees = $dipendenti;
    }

    public function checkIfGreater($int1,$int2){
        if ($int1>$int2) {
           return true;
        }
        return false;
    }

    public function printCheckEmployees($num = 0){
        if ($this->checkIfGreater($this->tot_employees,$num)) {
            echo "l'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti. \n";
        }else{
            echo"l'ufficio $this->name con sede in $this->location non ha abbastanza dipendenti. \n";
        }
    }

    public function calculateAnnualCost($int){
        return $this->tot_employees * (self::$avg_salary * $int);
    }

    public function printCalculatedAnnualCost($month = 12){
        echo "-----$this->name------\n";
        echo "Il costo dell'ufficio $this->name è di ".$this->calculateAnnualCost($month) . " ". "euro\n";
    }

    public function calculateProgressiveCost($month = 12){
        return self::$total += $this->calculateAnnualCost($month);
    }

    public static function printCalculatedFinalTotal(){
        echo "La holding ha una previsione di spesa pari a : " . self::$total."\n"; 
    }
   
}



$company1 = new Company('Aulab','Italia', 50);
$company2 = new Company('Apple','California', 137);
$company3 = new Company('Tesla','Texas',0);
$company4 = new Company('Amazon','Seattle',60);
$company5 = new Company('Microsoft','Redmon', 95);

$company1->printCheckEmployees();
$company1->printCalculatedAnnualCost();
$company1->calculateProgressiveCost();

$company2->printCheckEmployees();
$company2->printCalculatedAnnualCost();
$company2->calculateProgressiveCost();

$company3->printCheckEmployees();
$company3->printCalculatedAnnualCost();
$company3->calculateProgressiveCost();

$company4->printCheckEmployees();
$company4->printCalculatedAnnualCost();
$company4->calculateProgressiveCost();

$company5->printCheckEmployees();
$company5->printCalculatedAnnualCost();
$company5->calculateProgressiveCost();

Company::printCalculatedFinalTotal();







?>