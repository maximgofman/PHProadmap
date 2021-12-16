<?php

// Interfaces
// mit interfaces kann man angeben welche Methoden eine Klasse implementieren also Einbauen soll
// durch Schnittstellen also Interfaces kann man unterschiedliche Klassen auf die gleiche weise verwenden
// Schnittstellen werden mit Schlüsselwort interface bezeichnet

interface BeispielInterface {
    public function test1();
    public function test2($name, $farbe);
    public function test3();
}

// damit eine Klasse eine Schnittstelle Interface einbauen kann, müssen alle Methoden(Funktionen) der Schnittstelle
//implementiert einbaut werden
//d.h. in der Praxis

interface tier {
    public function mach_ein_laut();
}

class Katze implements tier {
    public function mach_ein_laut()
    {
        echo "MEOWWW MEOOOW";
    }
}
class Hund implements tier {
    public function mach_ein_laut()
    {
       echo "WAU WAU";
    }
}
class Elefant implements tier {
    public function mach_ein_laut()
    {
        echo "GRUUAU GRAUU ";
    }
}

class Loewe implements tier {
    public function mach_ein_laut()
    {
        echo "RAWWWW RAWWW";
    }
}
// Tiere erstellen
$miez = new Katze();
$doggy = new Hund();
$peter = new Elefant();
$hanz = new Loewe();

// Banales Beispiel oben
// Zum Beispiel wir möchten eine Software schreiben die eine Gruppe von mehreren Tieren verwaltet
// Es gibt Aktionen zum beispiel mach ein laut , die jedes tier ausführen kann , aber halt unterschiedlich !
// Mit der Schnittstelle schreiben wir einen Code der für alle Tiere funktioniert obwohl jedes tier sich anders
// verhält
echo "<hr>Loooooooop<hr>";

// Jetzt können wir mit einer Schleife durch alle Tiere durchgehen und die Funktion jeweils auswählen
$tiere = array($miez, $doggy, $hanz, $peter);
foreach ($tiere as $item){
    $item->mach_ein_laut();
    echo "<br>";
}