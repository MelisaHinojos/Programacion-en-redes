
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="CSS/style.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <form method="POST">
        Codigo <input name="nombre" type="text"><br>
        <input name="boton" type="submit" value="Enviar" name="iniciar">
        <?php
        $boton=$_POST['boton'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        if($boton == 3323){
            echo "Ingresaste como Administrador";
        } 
        else{
            echo "codigo incorrecto";
        }
        }
        ?>
      </form>
   
  </body>
</html>