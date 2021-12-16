<?php
//////////////////////////////////////////////////////////////////////
/////////////////////////Kapitel 7 ///////////////////////////////////
//////////////////////////////////////////////////////////////////////
/////////////////// Namespaces ///////////////////////////////////////
//////////////////////////////////////////////////////////////////////
namespace klar;
// namespace muss immer als Erstes in der PHP Datei stehen
// alle Konstanten Klassen und Funktionen, die hier deklariert werden gehörten, zu dem namespace klar;
class Tabelle{
    public $title = "";
    public $reihen = 0;
    public function message() {
        echo "<p>Table".$this->title." hat ".$this->reihen." reihen";
    }
}

$tab = new Tabelle();
$tab->title ="Hallo";
$tab->reihen = "5";
?>

<!DOCTYPE html>
<html>
<body>

<?php
$tab->message();
?>
</body>
</html>
