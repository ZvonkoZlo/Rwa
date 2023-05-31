
<?php
echo ("zadatak 2-Ispis aritmeticke sredine 2 broja </br>");
//racunanje aritmeticke sredine u funkciji aritmeticka_sredina
function aritmeticka_sredina($broj1, $broj2) {
    echo "Aritmeticka sredina izmedu broja ".$broj1. " i broja ".$broj2. " je ";
    return ($broj1 + $broj2) / 2;
}
//pozivi funkcije aritmeticka sredina sa različitim parametrima
echo aritmeticka_sredina(4,12);
echo "<br>";
echo aritmeticka_sredina(2,8);
echo "<br>";
echo aritmeticka_sredina(11,17);
?>