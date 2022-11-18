<?php

include 'bd.php';
if (isset($_COOKIE['session'])) {
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
    <form method="POST">
        Nombre <input name="nombre" type="text"><br>
        Email <input name="email" type="email"><br>
        Contraseña <input name="contrasena" type="password"><br>
        <input class="boton" type="submit" value="Enviar" name="register">
    </form>
   
  </body>
</html>
