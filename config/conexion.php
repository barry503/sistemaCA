<?php 
//incluimos las costantes de conexion
#utilizamos require_once para no volver a incluir el archivo
require 'global.php';
#todo dentro de la variable $conexion
// incluimos el servidor 
// luego el usuario de la bd
// la contraseña del usuario de bd
// y el nombre de la bd 
$conexion = new mysqli($host,$usuario_db,$contrasena_db,$name_bd);
// consulta con mysqli_query para establecer el codigo de los caracteres
mysqli_query( $conexion, 'SET NAMES "'.$DB_ENCODE.'"');

//si tenemos un posible error con la conexion base de datos
if(mysqli_connect_errno()){
	printf("fallo conexion ala base de datos: %s\n",mysqli_connect_error());
	exit;
}#else{echo "conectado";}

if(!function_exists('ejecutarConsulta'))
{
// servira para ejecutar crud
  function ejecutarConsulta($sql)
  {
   global $conexion;
   $query = $conexion->query($sql);
   return $query;
 
  }

// servira para mostrar datos
  function ejecutarConsultaSimpleFila($sql)
  {
  	  global $conexion;
  	  $query = $conexion->query($sql);
   $row = $query->fetch_assoc();
   return $row;


  }

  function ejecutarConsulta_retornarID($sql)
  {
  	 global $conexion;
   $query = $conexion->query($sql);
   return $conexion->insert_id;
  }



function limpiarCadena($str)
{
	global $conexion;
	$str = mysqli_real_escape_string($conexion,trim($str));
	return htmlspecialchars($str);
}

}

 ?>
