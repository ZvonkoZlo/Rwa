

<?php
echo ("zadatak 4-Ispisuje faktorijele brojeva <br>");

function faktorijel($broj) {
    echo "Faktorijel broja ".$broj . " je <br> ";
    $faktorijel = 1;
    for ($i = 1; $i <= $broj; $i++) {
        $faktorijel *= $i;
        echo $i . "! = " . $faktorijel . "<br>";
    }
}

faktorijel(8);
echo "<br>";

for($i=0;$i<4;$i++){
    faktorijel(rand(1,20));
    echo "<br>";
}


?>