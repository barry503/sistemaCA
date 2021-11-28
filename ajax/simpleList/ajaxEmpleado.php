<?php 

require_once "modeloEmpleado.php";

$listarEmpleado = new listarEmpleado();


switch ($_GET['op']) {

    case 'listar':
        // code...
      $respuesta=$listarEmpleado->listar();
      // vamos a declarar un array o arreglo
       $data= Array(); 

       while($reg=$respuesta->fetch_object()){
           $data[]=array(
               "0" =>$reg->idempleado,
               "1" =>"<img src='../files/empleado/".$reg->foto."' height='110px' width='110px'>",
               "2" =>$reg->nombre,
               "3" =>$reg->apellido,
               "4" =>$reg->cargo
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