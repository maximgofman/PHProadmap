<?php
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
//////////////////// XML Expat Parser
/* Ein XML Parser ist ein ereignisbasierter Parser
z.b. <beispiel>test</beispiel>
Von CDATA Bis */


$parser = xml_parser_create();  // Initialisieren Sie den XML-Parser mit der xml_parser_create()Funktion

start($parser, "test", "as");


function start($parser, $element_name, $element_attrs){
    switch($element_name) {
        case "NOTE":
            echo "-- Note --<br>";
        break;
        case "TO":
            echo "To: ";
        break;
        case "FROM":
            echo "From: ";
        break;
        case "HEADING":
            echo "Heading: ";
        break;
        case "BODY":
            echo "Message ";
    }
}

// Im grund eine funktion die auf element name reagiert, je nach name wird ein anderes echo ausgeführt

// Funktion für das Ende eines Elements
function stop($parser, $element_name){
    echo "<br>";
}

// Funktion um die Daten zu finden die benötigt werden
function char($parser,$data){
    echo $data;
}


xml_set_element_handler($parser,"start", "stop"); // um xml zu sagen wo er starten und enden soll
// also die Funktion namen start und stop parser soll start und stop verwenden


xml_set_character_data_handler($parser, "char");
// weleche funktion ausgeführt wird wenn der parser auf Zeichen stößt

$fp=fopen("note.xml", "r");
// xml wird erstellt/geöffnet

// auf die Xml datei wird geschrieben
while($data=fread($fp, 4096)){
    xml_parse($parser,$data,feof($fp)) or // eig reicht nur das
    die (sprintf("XML ERROR: %s at line %d",
    xml_error_string(xml_get_error_code($parser)),
    xml_get_current_line_number($parser)
    ));
}

xml_parser_free($parser); // dadurch hat xml_parser_create freien speicher und kann wieder parsen


?>

