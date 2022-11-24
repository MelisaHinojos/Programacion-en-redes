<?php

include 'bd.php';
if (isset($_COOKIE['sesion'])) {
  header('Location: header.php');
}

if (isset($_POST['nombre'])) $nombre = $_POST['nombre'];
if (isset($_POST['email'])) $email = $_POST['email'];
if (isset($_POST['contrasena'])) $contrasena = $_POST['contrasena'];
if (isset($_POST['create_time'])) $create_time = $_POST ['create_time'];

$create_time = date('y/m/d');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$consulta = "INSERT INTO alta_usuarios (nombre, email, contrasena,create_time ) VALUES ('$nombre','$email','$contrasena','$create_time')";
$result = $conexion->query($consulta);
}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Formulario</title>
    <link rel="stylesheet" href="CSS/style.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <form action="formuser.php" method="POST">
        Nombre <input name="nombre" type="text" required><br>
        Email <input name="email" type="email" required><br>
        Contraseña <input name="contrasena" type="password" required><br>
        <input type="submit" class="btn btn-dark col-2" role="button" name="register" value="Registrar">
    </form>
   
  </body>
</html>
