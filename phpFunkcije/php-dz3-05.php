

<?php
echo ("zadatak 5-Promijeniti velicinu slova <br>");

$boje = array('B' => 'Blue', 'G' => 'Green', 'r' => 'Red');

function promjeni($polje, $velicina) {
    if ($velicina == "UPPER") {
        $polje = array_map('strtoupper', $polje);
    } elseif ($velicina == "LOWER") {
        $polje = array_map('strtolower', $polje);
    }
    
    return $polje;
}
//funkcija promijeni prima 2 parametra prvi je niz a pomocu drugog znamo u koji dio funkcije idemo
echo "lowercase: <br>";
print_r(promjeni($boje, "LOWER"));
echo "<br>";
echo "UPPERCASE: <br>";
print_r(promjeni($boje, "UPPER"));
?>