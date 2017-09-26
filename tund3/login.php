<?php

		
?>

<!DOCTYPE html>
<html>
<head>
<meta charset-''utf-8''>
  <title>Login kodutöö</title>
</head>

<body>
	<h1> LOGI SISSE!
	</h1>
	<p>
	<form method="POST">
		<label>Teie email: </label>
	<input name="loginEmail" type="email">
	<form method="POST">
		<label>Teie parool: </label>
	<input name="loginPassword" type="password">
	<input type="submit" name="submitLogin" value="Kinnita">
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
		<label>Teie sugu (N/M): </label>
	<input type="radio" name="gender" value="1">
	<input type="radio" name="gender" value="2">
	<form method="POST">
	</p>
	<p>
		<label>Teie email: </label>
	<input name="signupEmail" tyle="email">
	<form method="POST">
	</p>
	<p>
		<label>Teie parool: </label>
	<input name="signupPassword" type="password">
	</p>
	<p>
	<input type="submit" name="submitSignup" value="Kinnita">
	</p>
</body>
</html>