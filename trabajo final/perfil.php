

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<?php include 'header.php'; ?>
<div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="#" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">John Smith</h5>

            <?php
            include 'bd.php';
            $email = $_COOKIE["sesion"];
            $consulta= "SELECT * FROM alta_usuarios WHERE email='$email'";
            $result = $conexion->query($consulta);
            $id_usuario = '';

            while($datos=$result->fetch_array()){

              $nombre=$datos['nombre'];
              $contrasena=$datos['contrasena'];
              $create_time=$datos['create_time'];
              $id_usuario = $datos['id_usuario'];
              

            }?>
            <p name="nombre" class="text-muted mb-1"><?php echo $nombre; ?></p>
            <p name="email" class="text-muted mb-4"><?php echo $email; ?></p>
            <p name="contrasena" class="text-muted mb-4"><?php echo $contrasena; ?></p>
            <p name="create_time" class="text-muted mb-4"><?php echo $create_time; ?></p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-outline-primary ms-1"></button>
            </div>

            <?php
            $consulta2= "SELECT * FROM alta_usuarios WHERE email='$email'";
            $result2 = $conexion->query($consulta);

            while($datos=$result2->fetch_array()){

              $nombre=$datos['nombre'];
              $contrasena=$datos['contrasena'];
              $create_time=$datos['create_time'];
              

            }?>

          </div>
        </div>
<body>
</html>