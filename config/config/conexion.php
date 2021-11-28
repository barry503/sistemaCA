<?php


	# conectare la base de datos
    $con=@mysqli_connect($host, $usuario_db, $contrasena_db, $name_bd);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>

