<?php
////////////// ///////  VERZWEIGUNGEN /////// /////// /////// ///////

// IF ELSE / ELSE IF
$zahl1 = 1;
$zahl2 = 2;
if($zahl1 > $zahl2){
    echo $zahl1." ist größer";
}else if($zahl2 > $zahl1){
    echo $zahl2." ist größer";
}else{
    Echo "keine Zahl ist größer";
}

// Alternative Syntax für Kontrollstrukturen
if ($zahl1 > $zahl2):
        echo $zahl1." ist größer";
elseif ($zahl2 > $zahl1):
        echo $zahl2." ist größer";
else:
        echo "keiner Zahl ist größer";
endif;

// erklärung statt {} : benutzen , und ein If Else Statement muss immer geschlossen werden mit einem "endif;"



///////////////////// Schleifen //////////////////////////////////////////

// Foreach Schleife ////////////
/// Bsp. Foreach Schleifen macht man nur bei Arrays!
/// Wenn man ein Array z.b. ausgeben möchte wie hier unten braucht man unbedingt eine Foreach Schleife!
/// Die Schleife geht durch das ganze array Schritt für Schritt und setzt das aktuelle Element in die $Month Variable
foreach ($months as $month) {
    echo $month.", ";
}

/// Foreach Schleife mit Schlüssel-Wert-Paaren //////
/// In diesem Fall kann man den Schlüssel auch ausgeben lassen //////
foreach ($months as $monthNumber => $monthText){
    echo $monthNumber." ".$monthText." ";
}

/// While Schleife ////////
/// Während die Bedingung stimmt, werden die Anweisungen ausgeführt";
/// Diese Schleife verwendet man, wenn man möchte das eine Schleife nur ausgeführt wird, wenn alle
/// Bedingung stimmen, sonst verwendet man die do while schleife, in der die Schleife mind.1-mal durchläuft
$allMonths = count($months);
$selectedMonth = 1;
while($selectedMonth <= $allMonths){
    echo $months[$selectedMonth].", ";
    $selectedMonth++;
}

/// For Schleife ////////////
/// Eine For Schleife bentutz man, wenn man alle Bedingungen schon kennt
for($selectedMonth= 1; $selectedMonth <= $allMonths; $selectedMonth++){
    echo $months[$selectedMonth].", ";
}

////Do while Schleife ////////////
/// Im Vergleich zu der While Schleife, führt die Do While Schleife mindestens einmal die Anweisung aus
/// während die While schleife die Anweisung gar nicht ausführt, wenn die Bedingung nicht stimmt.
$startMonth = 1;
do {
    echo $months[$startMonth].", ";
    $startMonth++;
}while($startMonth <= count($months));


////////////////////
/// Break und Continue
/// Break benutzt man um z.b. um aus einer Schleife herauszukommen
/// Continue benutzt man um aus einer Schleife rauszukommen
///
/// Beispiele: Break
echo "<br><hr>";
test();
function test(){
    for($i = 0; $i < 10; $i++){
        echo $i;
        if($i == 3){
            break;
        }
    }
    echo "Funktion läuft noch";
}


/////////////////
/// Switch
//  Ist ähnlich wie ein IF Else Statement, nur mit einer anderen Syntax

$i = 1;
switch($i){
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    default:
        echo "Diese Zahl lasse ich nicht zu!";
}

// Funktioniert auch so:

$i = 3;
switch($i):
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    default:
        echo "Diese Zahl lasse ich nicht zu";
endswitch;

//////// MATCH ////////// PHP 8.0+
// Beispiel //
/*
$essen = "pizza";
 Match funktioniert erst ab php 8.0
$was_esse_ich = match ($essen){
    "pizza" => "Ich esse Pizza",
    "käse" => "Ich esse Käse",
    "Hund" => "Ich esse Hund"
};
*/

/////// DECLARE ??? ////////
///


///// RETURN ///////
/*
 * Return beendet die Ausführung des Codes und gibt den Parameter als Rückgabewert der Funktion wieder
 */
// Beispiel
echo double(2);
function double($zahl){
    return($zahl*2);
}
// steht in den Klammern nichts, dann wird ein output = NULL ausgegeben!



///// REQUIRE ///////
// Ist dasselbe wie include nur das es eine Fehlermeldung bei einem Fehlerfall ausgibt und das Programm beendet, während
// include nur eine Warnung ausgibt
// require('datei.php');


///// INCLUDE ///////
/// Bindet eine Datei ein und führt sie aus
///Wenn die Datei nicht gefunden wird dann wir ein E_WARNING erzeugt, das Programm läuft aber normal weiter
///
//Wenn eine Datei eingebunden wird, wird für den enthaltenen Code der Geltungsbereich für Variablen übernommen,
// der in der Zeile mit dem include-Befehl gilt. Alle Variablen, die in dieser Zeile in der aufrufenden Datei
// verfügbar sind, stehen ab diesem Zeitpunkt auch in der aufgerufenen Datei zur Verfügung. Hingegen haben alle
// Funktionen und Klassen, die in der eingebundenen Datei definiert sind, den globalen Geltungsbereich.
// Also ab dem Zeitpunkt von include stehen die Variablen der datei zur verfügung


/// require_once //////
/// PHP überprüft ob die Datei bereits eingebunden wurde mit require , ist das der Fall dann bindet PHP die Datei nicht
/// noch einmal ein
/// include_once // identisch zu require_once , nur das bei require eine Fehlermeldung kommt und bei include nicht
///

//// goto ///
// in einer Funktion zu einer Bestimmten stelle springen ///
// Beispiel: //

goto a;
echo 'Foo';

a:
echo 'Bar';

//output nur "Bar"




