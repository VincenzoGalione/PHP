<?php
   for ($i= 1; $i <= 100 ; $i++) { 

    // // if/else
    // if($i % 3 == 0 && $i % 5 == 0){
    //     echo "\n". "HACKADEMY";
    //     echo " ".$i;
    // }elseif($i % 3 == 0){
    //     echo "\n". "PHP";
    //     echo " ".$i;
    // }elseif($i % 5 == 0 ){
    //     echo "\n". "JAVASCRIPT";
    //     echo " ".$i;
    // }else{
    //     echo "\n".$i;
    // };

    switch ($i) {
        case $i % 3 == 0  && $i % 5 == 0:
            echo "\n". "HACKADEMY";
            echo " ".$i;
            break;

        case $i % 3 == 0:
            echo "\n". "PHP";
            echo " ".$i;
            break;

        case $i % 5 == 0:
            echo "\n". "JAVASCRIPT";
            echo " ".$i;
            break;
            
        default:
           echo "\n".$i;
           break;
    };
    
  };





?>