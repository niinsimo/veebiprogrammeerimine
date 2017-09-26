<?php
	
	$signupFirstName = "";
	$signupFamilyName = "";
	$signupEmail = "";
	$gender = "";
	$signupBirthDay = null;
	$signupBirthMonth = null;
	$signupBirthYear = null;
	$signupBirthDate = null;
	
	$loginEmail = "";
	
	//kas on kasutajanimi sisestatud
	if (isset ($_POST["loginEmail"])){
		if (empty ($_POST["loginEmail"])){
			//$loginEmailError ="NB! Ilma selleta ei saa sisse logida!";
		} else {
			$loginEmail = $_POST["loginEmail"];
		}
	}
	
	//kontrollime, kas kirjutati eesnimi
	if (isset ($_POST["signupFirstName"])){
		if (empty ($_POST["signupFirstName"])){
			//$signupFirstNameError ="NB! Väli on kohustuslik!";
		} else {
			$signupFirstName = $_POST["signupFirstName"];
		}
	}
	//kas kuu määratud
	if(isset($_POST["signupBirthMonth"])){
		$signupBirthMonth = intval($_POST["signupBirthMonth"]);
	}
	
	//kontrollime, kas kirjutati perekonnanimi
	if (isset ($_POST["signupFamilyName"])){
		if (empty ($_POST["signupFamilyName"])){
			//$signupFamilyNameError ="NB! Väli on kohustuslik!";
		} else {
			$signupFamilyName = $_POST["signupFamilyName"];
		}
	}
	
	//kontrollime, kas kirjutati kasutajanimeks email
	if (isset ($_POST["signupEmail"])){
		if (empty ($_POST["signupEmail"])){
			//$signupEmailError ="NB! Väli on kohustuslik!";
		} else {
			$signupEmail = $_POST["signupEmail"];
		}
	}
	
	if (isset ($_POST["signupPassword"])){
		if (empty ($_POST["signupPassword"])){
			//$signupPasswordError = "NB! Väli on kohustuslik!";
		} else {
			//polnud tühi
			if (strlen($_POST["signupPassword"]) < 8){
				//$signupPasswordError = "NB! Liiga lühike salasõna, vaja vähemalt 8 tähemärki!";
			}
		}
	}
	
	if (isset($_POST["gender"]) && !empty($_POST["gender"])){ //kui on määratud ja pole tühi
			$gender = intval($_POST["gender"]);
		} else {
			//$signupGenderError = " (Palun vali sobiv!) Määramata!";
	}
		
	//tekitame sünnikuu valiku
	$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august", "september", "oktoober", "november", "detsember"];
	$signupMonthSelectHTML = "";  
	$signupMonthSelectHTML .= '<select name="signupMonth">' ."\n";
	$signupMonthSelectHTML .= '<option value="" selected disabled>kuu</option>' ."\n";
	foreach ($monthNamesEt as $key=>$month){
		if($key +1 === $signupBirthMonth) {
			$signupMonthSelectHTML .= '<option value"'.($key + 1) .'" selected>' .$month ."</option> \n";
		} else {
			$signupMonthSelectHTML .= '<option value"'.($key + 1) .'">' .$month . "</option> \n";
		}
	}
	$signupMonthSelectHTML .="</select> \n";
	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset-''utf-8''>
  <title>Login kodutöö</title>
</head>

<body bgcolor="#rrggbb">
	<h1> LOGI SISSE!
	</h1>
	<p>
	<form method="POST">
		<label>Teie email: </label>
	<input name="loginEmail" type="email">
	<form method="POST">
		<label>Teie parool: </label>
	<input name="loginPassword" type="password">
	<input type="submit" name="submitLogin" value="Logi sisse">
	</p>
	<h2>
	Või tee endale uus kasutaja!
	</h2>
	<p>
	<form method="POST">
		<label>Teie eesnimi: </label>
	<input name="signupFirstName" type="text">
	<form method="POST">
	</p>
	<p>
		<label>Teie perekonnanimi: </label>
	<input name="signupFamilyName" type="text">
	<form method="POST">
	</p>
	<p>
		<label>Teie sugu : </label>
	<input type="radio" name="gender" value="1"><label>Naine</label>
	<input type="radio" name="gender" value="2"><label>Mees</label>
	<form method="POST">
	</p>
	<p>
		<label>Teie email: </label>
	<input name="signupEmail" tyle="email">
	<form method="POST">
	</p>
	<p>
	
	<br>
	<label> Palun määra oma sünnikuupäev: </label>
	<?php
		echo $signupMonthSelectHTML;
	?>
	<br></br>
		<label>Teie parool: </label>
	<input name="signupPassword" type="password">
	</p>
	<p>
	<input type="submit" name="submitSignup" value="Loo kasutaja">
	</p>
</body>
</html>