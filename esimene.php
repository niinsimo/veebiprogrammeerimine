<?php
	//see on kommentaar, järgmisena paar muutujat
	$myName = "Simone";
	$myFamilyName = "Niinemägi";
	//vaatame, mis kell on ja määrame päeva osa
	$hourNow = date("H");
	//echo $hourNow;
	$partOfDay = "";
	if ( $hourNow <8) {  //  <  >  <=  >=  !=
		$partOfDay = "varajane hommik";
	}
	if ( $hourNow >= 8 and $hourNow < 16) {
		$partOfDay = "koolipäev";
	}
	if ( $partOfDay >= 16) {
		"vaba aeg";
	}
	//echo $partOfDay;
	
	//vaatame, kaua on koolipäeva lõpuni aega jäänud
	$timeNow = strtotime(date("d.m.Y H:i:s"));
	echo $timeNow;
	$schoolDayEnd = strtotime(date("d.m.Y" ." "."15:45"));
	//echo $schoolDayEnd;
	$toTheEnd = $schoolDayEnd - $timeNow;
	echo (round($toTheEnd/60));
	
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset-''utf-8''>
  <title>Simone Niinemägi informaatika</title>
  
</head>
<body>
  <h1> 
  <?php
		echo $myName ." " .$myFamilyName;
	?>
	
	
	</h1>
  <p> see ilmselt ei tööta aga ma proovin ikka
nvm töötab ikka woopp</p>
	<?php
	echo "<p>See on esimene jupp PHP abil väljastatud teksti</p>";

	echo "<p>Täna on ";
	echo date("d.m.Y"). ", kell lehe avamisel oli" . date("H:i:s");
	echo ", käes on " . $partOfDay.".</p>";
	?>
	
</body>
</html>

