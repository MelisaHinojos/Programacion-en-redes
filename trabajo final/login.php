<?php
include 'bd.php';

if (isset($_COOKIE['session'])) {
  header('Location: header.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $dato = $_POST['email'];
  $contrasena = $_POST['contrasena'];

  if (strpos($dato, '@')) {
    $consulta = "SELECT * FROM alta_usuarios WHERE email = '$dato'";
  } else {
    $consulta = "SELECT * FROM alta_usuarios WHERE nombre = '$dato'";
  }

  $result = $conexion->query($consulta);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      if ($contrasena == $row['contrasena']) {
        setcookie('session', $row['email'], time() + (86400 * 30) * 360, "/");
        header("location: header.php");
      } else {
        $msg = '<body> <div class="alert alert-danger">
        <strong class="text-red-900"> La contraseña ingresada es incorrecta.</strong>
      </div> </body>';
      }
    }
  } else {
    $msg = '<body> <div class="alert alert-danger">
    <strong  class="text-red-900">El usuario no existe.</strong> 
  </div> </body>';
  }
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
    <form  method="POST">
        Email <input name="email" type="email"><br>
        Contraseña <input name="contrasena" type="password"><br>
        <input class="boton" type="submit" value="Enviar" name="register">
    </form>
    <?php if (isset($msg)) echo $msg ?>
  </body>
</html>
