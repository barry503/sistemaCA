<?php 
require_once "../../modelos/vistablas/editInfoIns.php";


// se crea la istancia $sitio
$sitio=new Sitio();

$id=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";







switch($_GET["op"]){

  case 'guardaryeditar':
    
       if(empty($id)){
             $respuesta=$sitio->insertar($nombre,$descripcion);
             echo $respuesta ? "Campo Institucional registrado" : "El Campo Institucional  no se pudo registrar";
       }
         else {
               $respuesta=$sitio->editar($id,$nombre,$descripcion);
             echo $respuesta ? "Campo Institucional actualizado" : "Campo Institucional no se pudo actualizar";

         }
         
  break;

case 'eliminar':
           $respuesta=$sitio->eliminar($id);
             echo $respuesta ? "Campo Institucional eliminado" : "El Campo Institucional no se pudo eliminar";

  break;




    case'mostrar':
              $respuesta=$sitio->mostrar($id);
              //codificar el resultado json
             echo json_encode($respuesta); 
    break;




     case'listar':
      $respuesta=$sitio->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>'<button title="Editar El Campo Institucional" class="bnt btn-warning " onclick="mostrar('.$reg->id.')"><i class="fa fa-edit"></i></button>'.'<button class="bnt btn-danger" title="Eliminar El Campo Institucional" onclick="eliminar('.$reg->id.')"><i class="fas fa-trash"></i></button><br>'.$reg->id,
               "1" =>$reg->nombre,
               "2" =>$reg->descripcion
              );

       }

       $results = array(
         "sEcho" =>1, //informacion para el datatables
          "iTotalRecords" =>count($data), //enviamos el total registros al datatable
           "iTotalDisplayRecords" =>count($data), //enviamos el total registros a           visualizar
           "aaData"=>$data);

       echo json_encode($results);
    break;

}
 ?>