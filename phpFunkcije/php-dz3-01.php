
<?php
echo ("zadatak 1-Provjera dali je broj prost i ispis svih manjih od 100</br>");
//u ovoj funkciji provjeramo jeli broj prost
function prost($number) {
    if ($number == 1)
        return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
//nakon svakog poziva funkcije prost koja provjeri dali je broj prost ispisujemo taj broj
for($i=1; $i<=100; $i++) {
    if(prost($i)) {
        echo $i . "<br>";
    }
}
?>