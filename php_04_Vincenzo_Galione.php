<?php

$users = [
    ['name' => 'Luca', 'surname'=>'Rossi', 'gender'=> 'M'],
    ['name' => 'Eva', 'surname'=>'Baldi', 'gender'=> 'F'],
    ['name' => 'Jessica', 'surname'=>'Ortega', 'gender'=> 'NB'],
    

];



// echo $users[3].$users[0]["gender"].$users[0]["name"].$users[0]["surname"].("\n");
// echo $users[3].$users[1]["gender"].$users[1]["name"].$users[1]["surname"].("\n");
// echo $users[3].$users[2]["name"].$users[2]["surname"];




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