<?php 

//incluimos inicialmente la conexion ala base de datos
require '../../config/conexion.php';
#INICIO DE LA CLASE Usuario
class Usuario{

#inplementamos nuestro constructor
	public function __construct(){
    #aqui puedes incluir funciones que se implementen dentro del constructor
	}
#inplementamos nuestro constructor

#FUNCIONES PARA EL LOGIN DEL SISTEMA
#Funcion para verificar el acceso al sistema(funcion principal)
public function verificar($usuario,$clave){
  // login = usuario
  $sql="SELECT * FROM usuario WHERE usuario='$usuario' AND clave='$clave' AND condicion='1'";
  return ejecutarConsulta($sql);
}
//Funcion para verificar el acceso al sistema(funcion principal)

#Funcion para cambiar el estado a En linea del  acceso al sistema
public function Inicio($usuarioI){
  $status = "En linea";
  $sql="UPDATE usuario SET status = '$status' WHERE usuario='$usuarioI'";
  return ejecutarConsulta($sql);
}
//Funcion para cambiar el estado a En linea del  acceso al sistema

#Funcion para cambiar el estado a desconectado del  acceso al sistema
public function salir($Usalir){
 $status = "Desconectado";
  $sql="UPDATE usuario SET status = '$status' WHERE idusuario='$Usalir'";
  return ejecutarConsulta($sql);
}
//Funcion para cambiar el estado a desconectado del  acceso al sistema

//FUNCIONES PARA EL LOGIN DEL SISTEMA

public function selectCargo()
{
  $sql="SELECT * FROM cargo";
  return ejecutarConsulta($sql);

}


}
//FIN DE LA CLASE Usuario
?>