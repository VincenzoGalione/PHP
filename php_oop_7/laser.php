<?php
require_once('abstract1.php');

class Laser extends Attack{
    public function attack(){
        echo "Laser attivo, non puoi sfuggirmi!\n";
    }
}

?>