
<?php
// Provjeravamo jeli metoda u formi post,ako je onda novim varijablama dajemo vrijednosti iz forme,pomoću name atributa
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$password = $_POST["password"];
    $ime = $_POST["username"];
	// pozivamo funkciju checkPwd koja ce provjeriti jesu li zadovoljeni postavljeni parametri
	$valid = checkPwd($password);
	if($valid) {
        
		echo "Korisničko ime je ". $ime .",a lozinka je ->".$password."<- i lozinka je valjana.";
	} else {
		echo "Korisničko ime je ". $ime .",a lozinka je ->".$password."<- i lozinka nije valjana.";
	}
}

function checkPwd($pwd) {
	if(strlen($pwd) < 6) {
		return false;
	}
	if(!preg_match("#[0-9]+#", $pwd) || !preg_match("#[a-zA-Z]+#", $pwd)) {
		return false;
	}
	return true;
}
?>