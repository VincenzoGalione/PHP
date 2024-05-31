<?php
$users =[
    ['name' => 'Luca', 'surname'=>'Rossi', 'gender'=> 'Sig.'],
    ['name' => 'Eva', 'surname'=>'Baldi', 'gender'=> 'Sig.ra'],
    ['name' => 'Jessica', 'surname'=>'Ortega', 'gender'=> 'NB'],
    'Buongiorno',

];



echo $users[3].$users[0]["gender"].$users[0]["name"].$users[0]["surname"].("\n");
echo $users[3].$users[1]["gender"].$users[1]["name"].$users[1]["surname"].("\n");
echo $users[3].$users[2]["name"].$users[2]["surname"];



// $teachers = [
//     "Lorenzo" => ['Docente',23,"Backend",["Laravel","Livewire"]]
// ];

// echo $teachers["Lorenzo"][0];
// echo $teachers["Lorenzo"][1];
// echo $teachers["Lorenzo"][3][0];






?>