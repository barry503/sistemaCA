<?php 
session_start();
require_once "../../modelos/editablas/ModeloUsuario.php";
 // se crea la istancia $usuario
 $usuarioC=new Usuario();






switch($_GET["op"]){
 

case 'verificar':

  $logina=$_POST['logina'];
  $usuarioI=$_POST['logina'];
    $clavea=$_POST['clavea'];
    
$rspta1=$usuarioC->Inicio($usuarioI);

    //Hash SHA256 en la contraseña
      $clavehash=hash("SHA256",$clavea);  
             
     $rspta=$usuarioC->verificar($logina, $clavehash);

     $fetch=$rspta->fetch_object();

             if(isset($fetch))
             {
               //Declaramos las variables de session
               $_SESSION['idusuario']=$fetch->idusuario;
               $_SESSION['nombre']=$fetch->nombre;
               $_SESSION['apellido']=$fetch->apellido;
               $_SESSION['imagen']=$fetch->imagen;
               $_SESSION['email']=$fetch->email; 
               $_SESSION['telefono']=$fetch->telefono;
                $_SESSION['direccion']=$fetch->direccion;
                $_SESSION['clave']=$fetch->clave;
                $_SESSION['unique_id']=$fetch->unique_id;
               $_SESSION['usuario']=$fetch->usuario; //login=usuario
                                 
             }
      
                  //codificar el resultado json
             echo json_encode($fetch);

  break;

case 'salir':

 $Usalir = $_SESSION['idusuario'];
// usuario0salir
$rspta=$usuarioC->salir($Usalir);
 /*$rspta=$usuarioC->salir($Usalir);*/
    //codificar el resultado json
    /*echo json_encode($rspta);*/ 
  // limpiamos las variables de session
 session_unset();
 // Destruimos la session
 session_destroy();
 //Redireccionamos al login
 header("Location: ../../index.php");



break; 


}




 ?>