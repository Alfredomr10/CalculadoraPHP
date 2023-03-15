<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<style type="text/css">
		form {
			margin: 20px auto;
			padding: 20px;
			border: 1px solid #ccc;
			width: 300px;
		}

		input[type="number"], select {
			margin: 5px 0;
			padding: 5px;
			width: 100%;
		}

		input[type="submit"] {
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
			width: 100%;
		}

		input[type="submit"]:hover {
			background-color: #c43421;
		}

		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Calculadora</h1>
	<form method="post" action="calculadora.php">
		<label for="num1">Número 1:</label>
		<input type="number" name="num1" id="num1" required>

		<label for="num2">Número 2:</label>
		<input type="number" name="num2" id="num2" required>

		<label for="operador">Operador:</label>
		<select name="operador" id="operador" required>
			<option value="+">Suma</option>
			<option value="-">Resta</option>
			<option value="*">Multiplicación</option>
			<option value="/">División</option>
		</select>

		<input type="submit" value="Calcular">
	</form>
</body>
</html>