<html>
<head></head>
<body>
<h4>Odaberite opciju:</h4>


<form name="forma" method="GET">
<input type="submit" name="A" value="A"/>
<input type="submit" name="B" value="B"/>
<input type="submit" name="C" value="C"/>
</form>

<?php

if(isset($_GET['A'])){
	echo "Kliknuli ste gumb A";
}
else if(isset($_GET['B'])){
	echo "Kliknuli ste gumb B";
}
else if(isset($_GET['C'])){
	echo "Kliknuli ste gumb C";
}



?>
</body>
</html>