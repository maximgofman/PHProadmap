<?php
// PHP Data Types //
// String Zeichenkette
$test = "Hallo Welt";
var_dump($test);

// Integer Zahl
$zahl = 3;
var_dump($zahl);

// Float Fließkommazahl
$float = 3.33;
var_dump($float);


// Boolean true or false
$boo = true;
var_dump($boo);


// Array [] wie eine liste
$arr = ["1", "2"];
var_dump($arr);

/*
Object and Class ----
Klassen und Objekte sind die zwei wichtigsten Aspekte der objekt-orientierten Programmierung
Eine Klasse ist eine Vorlage für Objekte
Ein Objekt ist eine Instanz einer Klasse
Wenn ein idividuelles Objekt erstellt wird, hat er alle Eigenschaften einer Klasse

Zum Beispiel wir haben eine Klasse mit dem Namen Auto , eine Auto kann mehrere Eigenschaften haben , zum Beispiel
Modelnummer , Farbe etc. */

class Mensch {
    public $eye_color;
    public $money;
    public function __construct($eye_color, $money){
        $this->eye_color = $eye_color;
        $this->money = $money;
    }
    public function nachricht() {
        return "Augenfarbe: ".$this->eye_color." Geld:".$this->money;
    }
}
echo "<br>";
$max = new Mensch("blau", "300");
var_dump($max);
//output : object(Mensch)#1 (2) { ["eye_color"]=> string(4) "blau" ["money"]=> string(3) "300" }
echo $max->nachricht();

// mit -> kann man auf das Objekt zugreifen, z.b. in javascript macht man das mit einem Punkt */


//PHP NULL VALUE

$x = NULL;
var_dump($x);
//output NULL


