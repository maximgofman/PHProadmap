<?php

// Interfaces und Klasse - Zwei unterschiedliche Dinge


/// KLASSEN UND UNTERKLASSEN UND UNTERUNTERKLASSEN



$peter = new Unterunterklasse(1,"Peter", "kasaschstan", 2000, "Euro");
// jetzt kann peter auf showmoney, about_me und money in one year funktion zugreifen.
$peter->about_me();
echo "<br>";
$peter->money_in_one_year();


class Oberklasse  {
    public $id;
    public $name;
    public $country;
    public $money;
    public $moneySymbol;

    function __construct($id,$name,$country,$money,$moneySymbol){
        $this->id = $id;
        $this->name = $name;
        $this->country = $country;
        $this->money = $money;
        $this->moneySymbol = $moneySymbol;
    }
    function about_me(){
        echo "Das ist ".$this->id." Er heißt ".$this->name." und ist aus ".$this->country;
    }

}
class Unterklasse extends Oberklasse {
    function showMoney(){
        echo "<br>Er hat ".$this->money.$this->moneySymbol." Geld";
    }
}
class Unterunterklasse extends Unterklasse {
    function money_in_one_year(){
        echo ($this->money*12)." ".$this->moneySymbol." hat er in einem Jahr";
    }
}


