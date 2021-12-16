<?php

/*
 * Objektorientierte Programmierung OOP
 */

/* Worum gehts?
 Objekte erstellen mit sowohl Daten als auch Funktionen
 DRY PRINZIP > dont repeat yourself -> "Hardcoden" , Recycling


 Was sind Klassen und was sind Objekte?
 Klasse zum Beispiel Frucht
 darauf ein Objekt eine Instanz wäre Apfel, Banane, Mango etc.

  Daraus folgt: Eine Klasse ist eine Vorlage für Objekte, wie etwas zu aussehen hat.
                Z.B. Alle Früchte kann man essen ^^

-> Erstellt man Objekte dann erben sie alle Eigenschaften und Verhaltensweisen der Klasse, aber jedes Objekt
hat unterschiedliche Werte für die Eigenschaften.<-
 */



//////////////////////////////////////////////////////////////////////
/////////////////////////Kapitel 1 ///////////////////////////////////
//////////////////////////////////////////////////////////////////////
/////////////////// Klassen/-Objekte /////////////////////////////////
//////////////////////////////////////////////////////////////////////


/*Klasse Früchte erstellen mit den Attributen Name, Gewicht und Farbe , und der Funktion diese Informationen
 mit einem echo Befehl aufzurufen*/

// Nun können wir aus der Klasse ein neues Objekt erstellen

$apple = new Fruit("Apfel", "red", "200g");
$banana = new Fruit("Banane", "gelb", "50g");

// Funktion aufrufen
$apple->get_information();
echo "<br>";
$banana->get_information();

//Klasse erstellen
class Fruit {
    public $name;
    public $weight;
    public $color;

    function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    function get_information(){
        echo "Die Frucht ".$this->name." hat die Farbe ".$this->color." und wiegt ".$this->weight;
    }
}

/* Mit public $name etc. sagen wir das die Variable auch außerhalb der Klasse aufgerufen werden kann.
mit private oder protected kann die Funktion nur in der Klasse aufgerufen und verarbeitet werden
mehr dazu unter PHP Extras/ Private Public Protectec.php */


//////////////////////////////////////////////////////////////////////
/////////////////////////Kapitel 2 ///////////////////////////////////
//////////////////////////////////////////////////////////////////////
/////////////////// __Desktuktor /////////////////////////////////////
//////////////////////////////////////////////////////////////////////


/* __construct Funktionen werden automatisch aufgerufen, wenn ein Objekt aus einer Klasse erstellt wird
eine __destruct Funktion wird automatisch am Ende des Scripts ausgeführt.
Durch die --destruct Funktion reduziert man Code menge > Performance erhöht sich */


//////////////////////////////////////////////////////////////////////
/////////////////////////Kapitel 3 ///////////////////////////////////
//////////////////////////////////////////////////////////////////////
/////////////////// Vererbung ////////////////////////////////////////
//////////////////////////////////////////////////////////////////////

// Wenn eine Klasse von einer anderen Klasse abstammt
echo "<br><hr>";

$fabian = new userinfo("fabian", "300Euro", "keine", "Nutzer");
$peter = new userinfo("Peter", "30300Euro", "keine", "Admin");


$fabian->checkstatus();
echo "<br>";
$peter->checkstatus();

if ($peter->status == "Admin"){  // ändernung mit der Klasse vornehmen
    $peter->status = "Nutzer";
}
echo "<br>";
$peter->checkstatus();

class User{
    public $name;
    public $gehalt;
    public $eltern;
    public $status;
    function __construct($name, $gehalt, $eltern, $status){
        $this->name = $name;
        $this->gehalt = $gehalt;
        $this->eltern = $eltern;
        $this->status = $status;
    }
}

class userinfo extends User{ // userinfo erbt von user die Attribute z.b.
    public function checkstatus(){
        if($this->status == "Admin"){
            echo $this->name." is ein Admin";
        }else{
            echo $this->name." ist kein Admin";
        }
    }
}

//////////////////////////////////////////////////////////////////////
/////////////////////////Kapitel 4 ///////////////////////////////////
//////////////////////////////////////////////////////////////////////
/////////////////// Konstante ////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
echo "<br><hr>";

class adios{
    const NACHRICHT = "ADIOS AMIGO";
}

echo adios::NACHRICHT;

/* Die Konstante kann nicht mehr geändert werden
von außerhalb kann man auf die Konstante zugreifen mit Klassenname: konstantename
Konstante sind case sensitive
*/

//////////////////////////////////////////////////////////////////////
/////////////////////////Kapitel 5 ///////////////////////////////////
//////////////////////////////////////////////////////////////////////
/////////////////// PHP EIGENSCHAFTEN ////////////////////////////////
//////////////////////////////////////////////////////////////////////
echo "<br><hr>";
/*
 * Bei PHP kann eine Klasse, die unter einer Klasse steht nur von der Elternklasse vererben also nur von einer
 * Klasse vererben.
 *Wenn eine Klasse mehrere Verhaltensweisen erben muss -> Lösung: OOP-Merkmale
 * -> TRAITS <-
 */

trait Beispiel {
    //irgendwas
    public function hallo(){
        echo "caio";
    }
    public function caio(){
        echo "bella";
    }
}

trait Beispiel2 {
    public function aha(){
        for($i= 0; $i < 10; $i++){
            echo "ha";
        }
    }
}




class meineKlasse {
    use Beispiel, Beispiel2;   // mehrere Traits benutzen
}

$beispielObjekt = new meineKlasse();

$beispielObjekt->hallo();
$beispielObjekt->caio();
echo "<br>";
$beispielObjekt->aha();

// jetzt können wir die Funktion verwenden, obwohl sind nicht
// in der Klasse klar deklariert ist.

// USE CASE > so kann man nachträglich noch funktionen in mehrere klassen implementieren
// übersichtlicher etc.



//////////////////////////////////////////////////////////////////////
/////////////////////////Kapitel 6 ///////////////////////////////////
//////////////////////////////////////////////////////////////////////
/////////////////// Statische Methoden ///////////////////////////////
//////////////////////////////////////////////////////////////////////
echo "<br><hr>";

// Man kann statische Methoden direkt aufrufen, ohne ein Objekt/Instanz der Klasse zu erstellen

class bsp{
    public static function staticMethode(){
        echo "HELLLOOOO";
    }
}

bsp::staticMethode();  // Funktion aufrufen ohne ein Objekt erstellt zu haben
//output "HELLOOO";

// auf eine statische Methode innerhalb einer Klasse zugreifen?
// mit self::methodename

// BEISPIEL

echo "<br>";

$test = new stat();
// die construct funktion wird immer aufgerufen, wenn die klasse erstellt wird
// die destruct immer am ende

// output hi siehst du , weil die konstrukt funktion die methode2 funktion auch aufruft mit self::methode2


class stat{
    public static function methode2(){
        echo "siehst du";
    }

    public function __construct()
    {
        echo "hi";
        self::methode2();
    }

}
// Use case in der Praxis

/*
 * Static Methoden sind nicht ein z.b. User gekopelt, sondern sind global
 * Zum Beispiel müsste der username nicht statisch sein da er varieren kann
 * aber die funktion einen user zu erstellen sollte statisch sein, weil das immer gleich ist
 */

/*  https://www.php-einfach.de/experte/objektorientierte-programmierung-oop/statische-methoden-und-eigenschaften/
class User1 {
    public $name;

    public static $allUsers = array();

    public static function numberOfUsers() {
        return count(self::$allUsers);
    }

    public static function createNewUser($name) {
        if(strlen($name) < 10) {
            echo "Nur User mit langen Namen sind erlaubt!<br>";
            return null;
        } else {
            $user = new User();
            $user->name = $name;

            self::$allUsers[] = $user;

            return $user;
        }
    }
}

User1::createNewUser("Max Mustermann");
echo "Anzahl Nutzer: ".User::numberOfUsers()."<br>";
User1::createNewUser("Lisa Kurz");
echo "Anzahl Nutzer: ".User::numberOfUsers()."<br>";
*/



echo "<br><hr>";
?>



















