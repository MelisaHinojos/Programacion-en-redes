<?php
include 'bd.php';

$email = str_replace("%","@",$_COOKIE['sesion']); 
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="#" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">John Smith</h5>
     
            <p name="nombre" class="text-muted mb-1"><?php echo $nombre; ?></p>
            <p name="email" class="text-muted mb-4"><?php echo $email; ?></p>
            <p name="tag" class="text-muted mb-4"><?php echo $tag; ?></p>
   
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-outline-primary ms-1"></button>
            </div>
          </div>
        </div>
<body>
</html>