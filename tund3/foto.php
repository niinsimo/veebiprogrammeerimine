<?php
	$picsDir = "../../pics/";
	$picFileTypes=["jpg", "jpeg", "png", "gif"];
	$picFiles = [];
	
	$allFiles = array_slice(scandir($picsDir), 2);
	//var_dump($allFies); 
	foreach ($allFiles as $file){
		$fileType= pathinfo($file, PATHINFO_EXTENSION);
		if(in_array($fileType, $picFileTypes) == true){
			array_push($picFiles, $file);
		}
	}
	
	//$picFiles = array_slice($allFiles, 2);
	//var_dump($picFiles);
	
	$picCount = count($picFiles);
	$picNum = mt_rand(0,($picCount -1));
	$picFile = $picFiles[$picNum];
	
	
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset-''utf-8''>
  <title>Simone Niinemägi informaatika</title>
  
</head>
<body>
 <h1>Foto</h1>
	<p> </p>
	<h2> Natuke asjast ka</h2>
	
	</form>
	<img src="<?php echo $picsDir .$picFile; ?>" alt="Kool">
</body>
</html>

