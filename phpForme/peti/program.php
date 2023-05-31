<?php

if(empty($_GET['broj'])||empty($_GET['op'])){
	if(empty($_GET['broj'])){
		echo "Molim unesite broj!<br/>";
	}
	if(empty($_GET['op'])){
		echo "Molim unesite operaciju!<br/>";
	}
	
}

else{
	$op=$_GET['op'];
	$br=$_GET['broj'];
	echo "Poslali ste broj <b>$br</b><br/><br/>";
	
 if($op=='kub'){
	$k=pow($br,3);
	echo "Operacija je: <b>KUB</b> <br/><br/>";
	echo "Rezultat je: <b>$k</b>";	
}
else{
	$k=pow($br,2);
	echo "Operacija je: <b>KVADRAT</b> <br/><br/>";
	echo "Rezultat je: <b>$k</b>";	

	
}

}



?>