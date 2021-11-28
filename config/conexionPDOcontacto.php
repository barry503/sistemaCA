<?php 
#CONEXIONES ALA BASE DE DATOS

// configuracion global
require 'global.php';

try{
	// 1 conexion con PDO
	$base=new PDO("mysql:host=$host; dbname=$name_bd", "$usuario_db", "$contrasena_db");//RESPETAR LOS ESPACIOS DESDUES DE LAS COMAS
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//SetAttribute lleva dos T
	$base->exec("SET CHARACTER SET UTF8");
// echo "conectado";

// 2 conexion con PDO
$conexionPDO = new PDO("mysql:host=$host; dbname=$name_bd", "$usuario_db", "$contrasena_db");


	// 2 conexion mysqli
	$coneion= new mysqli("$host", "$usuario_db", "$contrasena_db", "$name_bd");
	

	// 3 conexion mysqli_connect
 	$conn = mysqli_connect("$host", "$usuario_db", "$contrasena_db", "$name_bd");

	}catch(PDOException $e){
        #devuelve el error
		die ('Error'.$e->getMessage());
		// linea del error
		echo "Linea del error".$e->getline();
			//Comprobar conexion
/*	if (!$conexionPDO) {
		printf("Fallo la conexion conexionPDO");
	}*/
	if(!$coneion)
	{
		printf("Fallo la conexion coneion");
	}
	if (!$conn) {
		printf("Fallo la conexion conn");
	}
	
	}



 ?>
