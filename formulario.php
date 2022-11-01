<html>
  <head>
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="header"><br>
      <a>Formulario Alta</a>
    </div>
    
    <form action="procesar.php" method="post">
        Nombre <input name="nombre" type="text"><br>
        Apellido <input name="apellido" type="text"><br>
        Usuario <input name="usuario" type="text"><br>
        Email <input name="email" type="email"><br>
        Contraseña <input name="contra" type="password"><br>
        Foto de Perfil <br><br><input name="imagen" type="file"><br>
        <input type="submit" value="Enviar" class="boton">
    </form>
  </body>
</html>
