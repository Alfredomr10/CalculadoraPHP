<!DOCTYPE html>
<html>
<head>

<title>numPar</title>
    <style type="text/css">
   
    body{
        background-color: #cccc;
    }
    h1 {
			text-align: center;
		}

	p {
			text-align: center;
			font-size: 24px;
			font-weight: bold;
		}
        </style>
	<p><img  src="/ProyectoPHP/descarga.png"></p>
</head>
<body >
<p>
<form method="post" action="">
<label for="numero"><p>Introduce un n�mero:</p></label>
<p><input type="number" name="numero" id="numero" required></p>
<p><button type="submit">enviar</button></p>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];
    echo '<p>El n�mero introducido es '.$numero.'.</p>';
}
if ($numero % 2 == 0) {
    echo '<p>El n�mero '.$numero.' es par.</p>';
}
else{
    echo '<p>El n�mero '.$numero.' es impar.</p>';
}
    ?>
<br>

<?php
?>
</p>
</body>
</html>