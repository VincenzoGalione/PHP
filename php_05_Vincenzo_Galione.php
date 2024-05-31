<?php
$numbers = [2,6,25,8,32,74,104,43,51];
$counter = 0;
$pari = 0 ;

foreach($numbers as $number){
    if($number % 2 == 0){
        $counter++ ."\n";
        $pari += $number;   
    };
};
$media = $pari/$counter;
echo "La somma dei numeri pari è :". " "  .$pari ."\n"; 
echo "I numeri pari presenti nell'array sono :". " " .$counter ."\n";
echo "La media è di :". " ".$media;


?>