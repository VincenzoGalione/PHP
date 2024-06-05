<?php

function checkLenght ($password){
    if (strlen($password)>= 8) {
        echo "La password è lunga 8 caratteri\n";
        return true;
    }
    else {
        echo "La password deve essere più lunga di 8 caratteri \n";
        return false;
    }  
}

function checkUppercase($password){
    for ($i=0; $i < strlen($password); $i++) { 
        if (ctype_upper($password[$i])) {
            echo "La tua password contiene un carattere maiuscolo\n";
            return true;
        }
    }
    echo "La tua password non contiene un carattere maiuscolo\n";
    return false;      
}

function checkNumber($password){
    for ($i=0; $i <strlen($password); $i++) { 
        if (is_numeric($password[$i])) {
            echo "La password contiene un numero\n";
            return true;
        }
    }
    echo "La password non contiene un numero\n";
    return false;
}

const SPECIAL_CHARS = ["!","@", "#", "$"];

function checkSpecialChar($password){
    for ($i=0; $i < strlen($password) ; $i++) { 
        if (in_array($password[$i], SPECIAL_CHARS)) {
            echo "La tua password contiene un carattere speciale\n";
            return true;
        }   
    }
    echo "La tua password non contiene un carattere speciale\n";
    return false;
}

function checkPassword($password){
    $first_rule = checkLenght($password);
    $second_rule = checkNumber($password);
    $third_rule = checkUppercase($password);
    $fourth_rule = checkSpecialChar($password);
    
    if($first_rule && $second_rule && $third_rule && $fourth_rule){
        echo "La tua password è accettata\n";
    }
    return $first_rule && $second_rule && $third_rule && $fourth_rule;
}

do {
    $password = readline ("Inserisci qui la tua password:\n"); 
} while (!checkPassword($password));










?>