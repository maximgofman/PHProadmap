<?php

// private public proteced sind Schlüsselwörter
// kommt drauf an von wo man dadrauf zugreift

// Beispiel: public kann man von überall aufrufen

$testcar = new auto(300,"black","3000euro");
$testcar->ask(); // kann ich aufrufen , außerhalb der classe <- muss public sein
$testcar->askKosten();

class auto{
    public $speed;
    public $color;
    public $kosten;

    function __construct($speed, $color, $kosten){
        $this->speed = $speed;
        $this->color = $color;
        $this->kosten = $kosten;
    }
    function ask(){
        echo "speed:".$this->speed." color:".$this->color;
    }
    function askKosten(){
        echo "Kosten: ".$this->kosten;
    }
}


// durch public kann man die Variable von überall aufrufen

// durch private darf die Variable nicht außerhalb der Klasse aufgerufen werden (Unterklassen dürfen es nicht)

// durch protected darf man innerhalb der Klasse die Variable benutzten auch bei Unterklassen


// usecase??
// -> z.B. mehrere Teams an einem Code, und irgendjemand verändert zum Beispiel eine Variable
// so kann jeder an einer Klasse arbeiten ohne das die andere diese beeinflussen


