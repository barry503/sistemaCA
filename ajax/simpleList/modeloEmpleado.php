<?php 

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';

/**
 * 
 */
class listarEmpleado
{
	
	public function __construct()
	{
		// code...
	}

	public function listar(){
		$sql="SELECT e.idempleado,e.foto,e.nombre,e.apellido,e.idcargo, c.idcargo, c.nombre_cargo as cargo  FROM empleado e INNER JOIN cargo c ON e.idcargo=c.idcargo ";
	return ejecutarConsulta($sql);

	}
}





 ?>