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
        <input class="boton" type="submit" value="Generar Tag" name="register">
    </form>
   
  </body>
</html>