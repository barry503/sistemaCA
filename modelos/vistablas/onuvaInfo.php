<?php 
// Este es el modelo de los alumnos del sistema



//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

class onuva
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}


//inplementar un metodo para mostrar  registros a modificar
public function mostrarinfo($id)
{
	$sql= "SELECT * FROM gestion_citio WHERE id='$id' ";
	return ejecutarConsulta($sql);
}








}






 ?>