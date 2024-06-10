<?php
// BATMOBILE
class Batmobile{
    private $parteAnteriore;   //attaccare

    public $partePosteriore ;   //difendere
    
    public function __construct(ParteAnteriore $_parteAnteriore, PartePosteriore $_partePosteriore){ //OBJECT COMPOSITION
                                                                                                    // DICENDO AL MIO COSTRUTTORE DI ACCETTARE UNA DETERMINATA CLASSE IO LO STO ISTRUENDO AD ACCETTARE ANCHE TUTTI I PISSIBILI FIGLI DI QUELLA CLASSE
        $this->parteAnteriore = $_parteAnteriore;
        $this->partePosteriore = $_partePosteriore;
    }

    public function attaccare(){
        $this->parteAnteriore->attacco();
    }

    public function difendere (){
        $this->partePosteriore->difendi();
    }

}


abstract class ParteAnteriore{

    abstract public function attacco();
}

class Lanciafiamme extends ParteAnteriore{

    public function attacco(){
        echo "Ti brucio tutto\n";
    }
}



class LanciaRazzi extends ParteAnteriore{

    public function attacco(){
        echo "Ti faccio esplodere\n";
    }
}

abstract class PartePosteriore {
    abstract public function difendi();
}

class Fumogeno extends PartePosteriore{

    public function difendi(){
        echo"Muro di fumo, non mi vedi più\n";
    }
}

class Rampino extends PartePosteriore{

    public function difendi(){
        echo"Scappo via, prova a prendermi\n";
    }
}

$lanciafiamme = new Lanciafiamme(); // non ha bisogno di parametri perchè nel metodo non ha un costruttore, ma abbiamo così instaziato um nuovo oggetto

$fumogeno = new Fumogeno ();  // non ha bisogno di parametri perchè nel metodo non ha un costruttore, ma abbiamo così instaziato um nuovo oggetto

$batmobile = new Batmobile($lanciafiamme, $fumogeno);

$batmobile1 = new Batmobile(new Lanciarazzi(), new Rampino()); //INLINE VARIABLE , cosi risparmio righe di codice

// $batmobile1->parteAnteriore->attacco(); questo è uguale a quello scritto qui sotto

// $batmobile1 // ENTRO NELL'OGGETTO DI CLASE BATMOBILE CHE HO CREATO IN PRECEDENZA
// ->parteAnteriore // CERCO UN ATTRIBUTO CHE SI CHIAMA $parteAnteriore CHE, IN QUESTO CASO è ANCH'ESSO UN OGGETTO
// ->attacco(); // INVOCO IL METODO CHE APPARTIENE ALL'OGGETTO  DI CLASSE FIGLIA DI parteAnteriore

//  metodo migliore
$batmobile1->attaccare();
$batmobile1->difendere();


 
?>