<?php
// mit array und foreach schleife
$zustand = [
    ["Starkes Untergewicht",0,16],
    ["Mäßiges Untergewicht",16,17],
    ["Leichtes Untergewicht",17,18.5],
    ["Normalgewicht",18.5,25],
    ["Präadipositas",25,30],
    ["Adipositas Grad I ",30,35],
    ["Adipositas Grad II ",35,40],
    ["Adipositas Grad III ",40,1000]
];
if(isset($_POST['submit'])) {
    $weight = $_POST['weight'];
    $height = $_POST['height'] / 100;
    $BMI = round(($weight / ($height * $height)), 2);

    foreach ($zustand as $item => $numbers) {
        if ($BMI > $numbers[1] && $BMI < $numbers[2]) {
            echo $numbers[0];
        }
    }
}

// mit if else [schlechte Lösung]
if (isset($_POST['submit'])) {
    $weight = $_POST['weight'];
    $height = $_POST['height'] / 100;
    $BMI = round(($weight / ($height * $height)), 2);
    switch ($BMI) {
        case 16 > $BMI && $BMI > 0:
            echo "Starkes Untergewicht";
            break;
        case $BMI >= 16 && $BMI < 17 :
            echo "Mäßiges Untergewicht";
            break;
        case $BMI >= 17 && $BMI < 18.5 :
            echo "Leichtes Untergewicht";
            break;
        case $BMI >= 18.5 && $BMI < 25 :
            echo "Normalgewicht";
            break;
        case $BMI >= 25 && $BMI < 30 :
            echo "Präadipositas";
            break;
        case $BMI >= 30 && $BMI < 35 :
            echo "Adipositas Grad I ";
            break;
        case $BMI >= 35 && $BMI < 40 :
            echo "Adipositas Grad II ";
            break;
        case $BMI >= 40 && $BMI <= 100:
            echo "Adipositas Grad III ";
            break;
    }
}

?>
<html>
<head>
    <title>BMI Rechner</title>
</head>
<body>
    <form action="" method="post">
        <label>Körpergröße: <input type="number" name="height"></label>
        <label>Gewicht in kg:<input type="number" name="weight"></label>
        <button type="submit" name="submit">Berechnen</button>
    </form>
</body>
</html>