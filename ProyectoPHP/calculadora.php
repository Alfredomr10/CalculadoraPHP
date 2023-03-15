<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<style type="text/css">
		h1 {
			text-align: center;
		}

		p {
			text-align: center;
			font-size: 24px;
			font-weight: bold;
		}

		button {
			background-color: #c43421;
			border: none;
			color: white;
			padding: 10px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 5px 0;
			cursor: pointer;
		}

		button:hover {
			background-color: #c43421;
		}

		.button-container {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Calculadora</h1>
	<?php
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operador = $_POST['operador'];

		if ($operador == '+') {
			$resultado = $num1 + $num2;
			echo '<p>'.$num1.' + '.$num2.' = '.$resultado.'</p>';
		} elseif ($operador == '-') {
			$resultado = $num1 - $num2;
			echo '<p>'.$num1.' - '.$num2.' = '.$resultado.'</p>';
		} elseif ($operador == '*') {
			$resultado = $num1 * $num2;
			echo '<p>'.$num1.' * '.$num2.' = '.$resultado.'</p>';
		} elseif ($operador == '/') {
			if ($num2 == 0) {
				echo '<p>Error: no se puede dividir entre cero</p>';
			} else {
				$resultado = $num1 / $num2;
				echo '<p>'.$num1.' / '.$num2.' = '.$resultado.'</p>';
			}
		}
	?>
	<div class="button-container">
		<button onclick="window.location.href='index.php'">Realizar otra operación</button>
	</div>
</body>
</html>