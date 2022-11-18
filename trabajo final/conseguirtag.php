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
          <p><?php echo uniqid("#"); ?></p>

      <?php } ?>
        <input class="boton" type="submit" value="Generar Tag" name="register">
    </form>
     
  </body>
</html>