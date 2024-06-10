<?php
require('laser.php');
require('repulsor.php');
require('flight.php');
require('shield.php');


class IronmanArmor{
    public $attack;
    public $defense;
    public static $counter = 0;

    public function __construct(Attack $attacco, Defense $difesa)
    {
        $this->attack = $attacco;
        $this->defense = $difesa;
        self::$counter++;
    }

    public function ironmanAttack(){
        $this->attack->attack();
    }

    public function ironmanDefense(){
        $this->defense->defend();
    }
}

$mark4 = new IronmanArmor(new Laser, new EnergyShield);


$mark4->ironmanAttack();
$mark4->ironmanDefense();
echo IronmanArmor::$counter . "\n";


$silverCenturion = new IronmanArmor(new Repulsor, new Flight);


$silverCenturion->ironmanAttack();
$silverCenturion->ironmanDefense();
echo IronmanArmor::$counter . "\n";

?>