<?php

include 'bd.php';

 $tag = uniqid("#");# $_POST['tag'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = str_replace("%","@",$_COOKIE['session']);
  $consulta = "INSERT INTO usuario_tag (id_usuarios,tag) VALUES ((SELECT id_usuarios from alta_usuarios WHERE email = '$email'),'$tag')";
  /*"WHERE '".$_COOKIE['session']."' = email";*/
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
    <?php
        if($_SERVER['REQUEST_METHOD'] =="POST"){ ?>
          <p><?php echo $tag; ?></p>

      <?php 
    } ?>
        <input class="boton" type="submit" value="Generar Tag" name="register">
    
    </form>
     
  </body>
</html>