<?php
libxml_use_internal_errors(true);
$xml =
    "<?xml version='1.0' encoding='UTF-8'?>
    <document>
    <user>Maxim</user>
    <email>maxim@gmail.com</email>
    </document>
    ";


$xml = simplexml_load_string($xml);
if($xml === false){
    echo "fail";
    foreach (libxml_get_errors() as $error){
        echo "<br>". $error->message;
    }
} else {
    print_r($xml);
}

///// anderer Weg
echo "<br><hr>";

$xml2 = simplexml_load_file("test.xml") or die("Error: geht net ");
print_r($xml2);

// oder

foreach ($xml2 as $item){
    echo $item."<br>";
}

////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
/// SIMPLEXML GET
// die einzelnen informationen bekommen
echo "<br><hr>";

echo $xml2->to;
echo $xml2->body;

// anderes Beispiel

$books = simplexml_load_file("books.xml") or die("Error");
print_r($books);
// sieht nicht so gut aus;
echo "<br><hr>";
echo $books->book[0]->title."<br>";
echo $books->book[1]->title."<br>";

echo "<br><hr>";
// bücherliste oder loop
foreach ($books as $book){
    echo $book->title."<br>";
}
