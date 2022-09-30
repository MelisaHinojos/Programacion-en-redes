<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario 1</title>
<br><br>
</head>
<body>

    <form  method="POST">
		<input type="text"      name="name"    placeholder="Nombre"><br><br>
    	<input type="email"     name="email"   placeholder="Email"><br><br>
    	<input type="password"  name="contra"  placeholder="Contraseña"><br><br>
    	<input type="submit"    name="register">
    </form>

	<?php
    include("subir.php");
	?>
</body>
</html>

