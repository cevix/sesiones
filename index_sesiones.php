<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Validacion de usuario</h1>

	<form name="sesiones" action="" method="post" enctype="application/x-www-form-urlencode">
		<label>Usuario:</label>
		<input type="text" name="usuario" autofocus required>
		<label>contarseña:</label>
		<input type="password" name="pass" required>

		<div class="botones">
			<input type="submit" name="enviar" value="Acceder">
			<input type="reset" name="borrar" value="Borrar">
		</div>

	</form>
	<?php  
	//index_sesiones.php
		if (isset($_GET)) {

		}else{
			echo "<h2>Introduce las credenciales</h2>";
		}

	?>
</body>
</html>
