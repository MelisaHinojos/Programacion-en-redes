<?php

include 'conexion.php';

if (isset($_POST['nombre'])) $nombre = $_POST['nombre'];
if (isset($_POST['email'])) $email = $_POST['email'];
if (isset($_POST['contraseña'])) $contraseña = $_POST['contraseña'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $sql = "insert into users (nombre, email, contraseña) values ('$nombre', '$email', '$contraseña')";
  if ($conn->query($sql) === TRUE) {
    echo "New user created successfully";
  } else {
    echo $conn->error;
  }
}
