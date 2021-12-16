<?php
//// Funktionen mit Parameter /////
/// Mit Parameter übergibt man Informationen der Funktion
// Beispiel:
$test = 1;
echo test($test);
function test($input){
    return $input;
}

// Liste mit Parameter
echo liste_verarbeiten("rot", "schnell");
function liste_verarbeiten($color, $speed){
    return $color." ".$speed;
}

// Parameter als Verweise übergeben !!
// das bedeutet wenn man den Wert eines Parameter innerhalb einer Funktion ändert
// bleibt er außerhalb der Funktion unverändert!
// doch man kann das mit Referenzen ändern
// Beispiel:

$test_var = 3;
change_input($test_var);

function change_input(&$input){ // durch das & zeichen verändert man auch die Variable außerhalb der Funktion
    $input += 3;            // ohne das & Zeichen würde sich die Variable nur innerhalb der Funktion verändern
}
echo $test_var;
//output: 6

//----//
//ohne Verweise

$test_var2 = 3;
change_input2($test_var2);

function change_input2($input){
    $input += 3;
}

echo $test_var2;
//output : 3, weil die Variable nur innerhalb der Funktion sich verändert hat !
