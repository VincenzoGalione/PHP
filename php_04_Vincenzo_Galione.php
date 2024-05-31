<?php

$users = [
    ['name' => 'Luca', 'surname'=>'Rossi', 'gender'=> 'M'],
    ['name' => 'Eva', 'surname'=>'Baldi', 'gender'=> 'F'],
    ['name' => 'Jessica', 'surname'=>'Ortega', 'gender'=> 'NB'],
    

];


foreach ($users as $user) {
    if ($user['gender']=='M'){
        echo "Buongiorno Sig." . $user['name'] . " " . $user['surname'] ."\n";
    }elseif ($user['gender']=='F') {
        echo "Buongiorno Sig.ra" . " "  . $user['name'] . " " . $user['surname'] . "\n";
    }else{ 
        echo "Buongiorno". " " . $user['name'] . " " . $user['surname'] . "\n";
    }
}




?>