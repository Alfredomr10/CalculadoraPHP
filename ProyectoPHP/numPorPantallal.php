<!DOCTYPE html>
<html>
<head>
	<title>Introducir un número</title>
    
</head>
<body>
	<h1>Introducir un número</h1>
	<form method="post" action="">
		<label for="numero">Introduce un número:</label>
		<input type="number" name="numero" id="numero" required>
		<button type="submit">Enviar</button>
	</form>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$numero = $_POST['numero'];
			echo '<p>El número introducido es '.$numero.'.</p>';
		}
	?>
</body>
</html>