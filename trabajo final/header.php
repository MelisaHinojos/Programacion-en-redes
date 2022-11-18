<?php

include 'bd.php';

if (isset($_COOKIE['session'])) {
  $email = $_COOKIE["session"];
  $consulta= "SELECT nombre from alta_usuarios where email = '$email'";
  $result = $conexion->query($consulta);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $nombre = $row['nombre'];
    }
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Formulario</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PROYECTO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
          <?php if (isset($_COOKIE['session'])) { ?>
          <div>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" ><?php echo $nombre ?></a>
          <?php if (isset($_COOKIE['session'])) { ?>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="conseguirtag.php">Conseguir un Tag</a></li>
            <li><a class="dropdown-item" href="logout.php">Cerrar Sesion</a></li>
          </ul>
    <?php } ?>
          </div>
        <?php } else { ?>
            <a href="formulario.php" class="nav-link active" aria-current="page" href="#">Registrar</a>
          </li>
          <li class="nav-item">
            <a href="login.php"class="nav-link active" href="#">Login</a>
          </li>
          <?php } ?>
      </div>
    
    </div>
  </nav>
  
  </body>
</html>
