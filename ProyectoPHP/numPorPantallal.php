<!DOCTYPE html>
<html>
<head>
	<title>Introducir un n�mero</title>
    
</head>
<body>
	<h1>Introducir un n�mero</h1>
	<form method="post" action="">
		<label for="numero">Introduce un n�mero:</label>
		<input type="number" name="numero" id="numero" required>
		<button type="submit">Enviar</button>
	</form>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$numero = $_POST['numero'];
			echo '<p>El n�mero introducido es '.$numero.'.</p>';
		}
	?>
</body>
</html>