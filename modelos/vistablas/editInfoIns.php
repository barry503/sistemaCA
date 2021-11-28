<?php 
// Este es el modelo de los alumnos del sistema



//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

class Sitio
{

// inplementamos nuestro constructor
	public function __construct()
	{
      


	}







 //inplementar un metodo para insertar registros incluire el id si funciona
  public function insertar($nombre,$descripcion)
  {
         $sql = "INSERT INTO infoe (nombre,descripcion) VALUES('$nombre','$descripcion')";
             return ejecutarConsulta($sql);

  }



   //inplementar un metodo para editar registros
public function editar($id,$nombre,$descripcion)
	{
         $sql = "UPDATE infoe SET nombre='$nombre', descripcion='$descripcion' WHERE id='$id' ";
             return ejecutarConsulta($sql);

	}



//inplementar un metodo para eliminar registros
public function eliminar($id)
{
         $sql = "DELETE FROM infoe WHERE  id='$id'";
             return ejecutarConsulta($sql);

}



//inplementar un metodo para mostrar  registros a modificar
public function mostrar($id)
{
	$sql= "SELECT * FROM infoe WHERE id='$id'";
	return ejecutarConsultaSimpleFila($sql);
}




//inplementar un metodo para listar  registros 
public function listar()
{
	$sql="SELECT * FROM infoe";
	return ejecutarConsulta($sql);

}





}






 ?>