<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator</title>
  <meta charset="UTF-8">
</head>
<body>
    <h1>Kalkulator</h1>
  <form method="get" action="kalkulator.php">
    <label for="a">A broj</label>
    <input type="text" name="a" id="a">
    <br>
    <label for="b">B broj:</label>
    <input type="text" name="b" id="b">
    <br>
    <label for="operacija">Operacija:</label>
    <select name="operacija" id="operacija">
      <option value="zbrajanje">+</option>
      <option value="oduzimanje">-</option>
      <option value="mnozenje">x</option>
      <option value="dijeljenje">/</option>
    </select>
    <br>
    <input type="submit" value="Rezultat">
  </form>

  <?php
//   prvo ide provjera jesu li sva polja popunjana
    function Operacija($a, $b, $operacija) {
        if (empty($a) || empty($b) || empty($operacija)) {
            return 'false';
        }
        // iduci korak je provjera koja je operacija odabrana
        if ($operacija === 'zbrajanje') {
            $rezultat = $a + $b;
            return $rezultat;
        }
        elseif ($operacija === 'oduzimanje') {
            $rezultat = $a - $b;
            return $rezultat;
        }
        elseif ($operacija === 'mnozenje') {
            $rezultat = $a * $b;
            return $rezultat;
        }
        elseif ($operacija === 'dijeljenje') {
            $rezultat = $a / $b;
            return $rezultat;
        }
        else {
            return 'false';
        }
    }
    // U ovom koraku postavljam varijable na one poslane iz forme metodom get i saljem ih funkciji "operacija" na obradu
    if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operacija'])) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $operacija = $_GET['operacija'];
        $rezultat = Operacija($a, $b, $operacija);
        if ($rezultat === 'false') {
            echo 'Dostavljeni su netočni podaci';
        }
        else {
            echo 'Rezultat operacije ' . $operacija . ' je: ' . $rezultat;
        }
    }
  ?>
</body>
</html>