<?php

    $mysql = new mysqli("localhost", "root","", "android users");

    if($mysql->connect_error)
    {

        die("fallo la conexion");
    }
    else
    {

        echo "conexion satisfactoria";
    }
?>


