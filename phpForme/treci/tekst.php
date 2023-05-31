<?php
echo "Ispis </br>";
if (isset($_GET['tekst']) && isset($_GET['broj'])) {
    $tekst = $_GET['tekst'];
    $broj = $_GET['broj'];
    for ($i = 1; $i <= $broj; $i++) {
        echo $i . '. ' . $tekst . '<br>';
    }
} else {
    echo "Nisu uneseni svi podaci";
}
?>