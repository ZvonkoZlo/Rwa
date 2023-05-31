<!DOCTYPE html>
<html>
<body>
<h3>Prvi zadatak.Korištenje for petlje za ispis brojeva od 1 do 20 i njihovih kvadrata.</br></h3>
<?php
for ($i = 1; $i <= 20; $i++) {
    echo "Ovo je broj: ";
    echo  $i . "<br>";
    echo "Ovo je njegov kvadrat: ";
    echo $i*$i . "<br>";
}
?>

<h3>Drugi zadatak.Suma prvih 100 prirodni brojeva sa for petljom</br></h3>
<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "Suma je: ";
echo $sum;

?>

<h3>Treci zadatak.Suma prvih 100 brojeva koristenjem while petlje</br></h3>
<?php
$suma = 0;
$i = 1;
while ($i <= 100) {
    $suma += $i;
    $i++;
}
echo "Suma je: ";
echo $suma;
?>

<h3>Cetvrti zadatak,parni brojevi od 1 do 100</br></h3>
<?php
for($i=2; $i<=100; $i+=2){
    echo $i . "<br>";
}
?>

<h3>Peti zadatak,troznamenkasti parni brojevi</br></h3>
<?php
for($i=100; $i<=999; $i+=2){
    if($i % 2 == 0)
        echo $i . "<br>";
}
?>

<h3>Sesti zadatak,dvoznamenkasti brojevi djeljivi sa 3 i 5 ili sa oba</br></h3>
<?php
for($i=10; $i<=99; $i++){
    if(($i % 3 == 0 && $i % 5 == 0) || ($i % 3 == 0) || ($i % 5 == 0))
        echo $i . "<br>";
}
?>

<h3>Sedmi zadatak pod a)Prosječan broj stanovnika kroz sve godine</br></h3>
<?php
$grad = array(1995 => 24000, 1997 => 25510, 1998 => 29154, 2000 =>32124, 2002 => 33114);
$populacija = 0;
foreach($grad as $year => $population) {
    $populacija += $population;
}
$average_population = $populacija / count($grad);
echo "Prosječan broj stanovnika kroz sve ove godine je: " . $average_population;
?>

<h3>Sedmi pod b)Koje godine je bilo najviše stanovnika</br></h3>
<?php
$grad = array(1995 => 24000, 1997 => 25510, 1998 => 29154, 2000 =>32124, 2002 => 33114);
$godina = 0;
$populacija = 0;
foreach($grad as $year => $population) {
    if($population > $populacija) {
        $populacija = $population;
        $godina = $year;
    }
}
echo "Godina s najviše stanovnika je: " . $godina . " (" . $populacija . " stanovnika te godine)";
?>

<h3>Sedmi zadatak pod c)Koliko godina se provodilo mjerenje</br></h3>
<?php
$grad = array(1995 => 24000, 1997 => 25510, 1998 => 29154, 2000 =>32124, 2002 => 33114);
echo "Mjerenje se provodilo kroz " . count($grad) . " godina.";
?>

<h3>Osmi zadatak,Funkcija koja ispise dali je broj prost i ispisati svaki koji je manji od 100</br></h3>
<?php
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

for($i=1; $i<=100; $i++) {
    if(prost($i)) {
        echo $i . "<br>";
    }
}
?>

<h3>Deveti zadatak,zbrojiti sve clanove brojevi niza pomocu foreach petlje</br></h3>
<?php
$brojevi = array(1, 22, 3, 4, 5, 99, 12, 49, 14, 23, 7);
$zbroj = 0;

foreach($brojevi as $broj) {
    $zbroj += $broj;
}

echo "Zbroj svih članova niza je: " . $zbroj;
?>

<h3>Deseti zadatak,Izracunati povrsinu i zapisati u varijablu</br></h3>
<?php
$a = 6;
$b = 8;

$povrsina_pravokutnika = $a * $b;

echo "Povrsina pravokutnika širine " . $a . " i dužine " . $b . " je " . $povrsina_pravokutnika;
?>







</body>
</html>