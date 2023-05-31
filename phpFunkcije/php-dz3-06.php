
<?php

echo ("zadatak 6-Operacije sa temperaturama<br>");

function temperature($temp) {
    // pretvaramo string u niz
    $temperatures = explode(",", $temp);
    $prosjek = array_sum($temperatures) / count($temperatures);
    echo "Prosječna temperatura je: " . $prosjek . "<br>";
    // sortiramo da bi lakse ispisali najvise i najmanje temperature
    sort($temperatures);
    // deset najnižih dobijemo ispisom 10 prvih nakon sortiranja
    echo "Deset najnižih temperatura: <br>";
    for ($i = 0; $i < 10; $i++) {
        echo $temperatures[$i] . "<br>";
    }
    // deset najviših dobijemo ispisom 10 zadnjih temperatura nakon sto su sortirane
    echo "Deset najviših temperatura: <br>";
    for ($i = count($temperatures) - 10; $i < count($temperatures); $i++) {
        echo $temperatures[$i] . "<br>";
    }
}

$temperature = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
temperature($temperature);
echo "<br>";
$temp= array();
for ($i = 0; $i < 15; $i++) {
    $temp[] = rand(-10,100);
}
$temperature = implode(',', $temp);
temperature($temperature);
echo "<br>";


?>