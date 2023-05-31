

<?php

echo ("zadatak 3-Funkcija koja ispisuje aritmeticku i geometrijsku sredinu</br>");
function izracunaj($skup) {

    $niz_brojeva = explode(",", $skup);
    $arit_sum = 0;
    //postavljamo geom_prod na 1 zbog množenja
    $geom_prod = 1;
    $broj_elemenata = count($niz_brojeva);
    for ($i = 0; $i < $broj_elemenata; $i++) {
        $arit_sum += $niz_brojeva[$i];
        $geom_prod *= $niz_brojeva[$i];
    }
    $aritmeticka = $arit_sum / $broj_elemenata;
    $geom_mean = pow($geom_prod, 1/$broj_elemenata);
    $string=implode(",",$niz_brojeva);
    
    echo "Aritmetička sredina niza: " .$string ." je ". $aritmeticka . "<br>";
    echo "Geometrijska sredina niza: ".$string ." je " . $geom_mean."<br>";
}

$skup = "12,8,1,7,8,5,4,16,12,13,20";
izracunaj($skup);
echo "<br>";

$skup = "22,98,34,77,55";
izracunaj($skup);
echo "<br>";

$skup = "22,98,34,77,55";
izracunaj($skup);
echo "<br>";


//Skup sa nasumicnim vrijednostima
$brojevi= array();
for ($i = 0; $i < 15; $i++) {
    $brojevi[] = rand(1,100);
}
$skup = implode(',', $brojevi);
izracunaj($skup);
echo "<br>";


?>