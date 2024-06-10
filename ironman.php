<?php
require_once('armor.php');

$mark4 = new Armor (new Laser, new Proiettili , new Booster);
$mark4->movimento();
$mark4->attaccare("sx");
$mark4->attaccare();


$silverCenturion = new Armor (new Cannoni, new Lame, new Booster);
$silverCenturion->movimento();
$silverCenturion->attaccare();
$silverCenturion->attaccare("sx");







?>