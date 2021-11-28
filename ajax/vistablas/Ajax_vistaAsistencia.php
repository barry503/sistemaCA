
<?php 
/* Connexion a la base de datos*/ 
$N1 = 2;
include '../../config/urlConexion.php'; 



switch($_GET["op"]){
  // este case sirve para agregar todos los cargos en el formulario
     case "selectCargo":
    
       require_once "../../modelos/editablas/ModeloUsuario.php";
    $cargo = new Usuario();

    $respuesta = $cargo->selectCargo();
    echo '<option value="NO">selecciona un cargo</option>';
   while($reg = $respuesta->fetch_object())

   {

    echo '<option value=' . $reg->idcargo .'>' . $reg->nombre_cargo . '</option>';

   }

    break;

  # este case sirve para agregar todos los meses en el formulario
     case "selectMes":

   echo "
   <option value='1'>Enero</option>
   <option value='2'>Febrero</option>
   <option value='3'>Marzo</option>
   <option value='4'>Abril</option>
   <option value='5'>Mayo</option>
   <option value='6'>Junio</option>
   <option value='7'>Julio</option>
   <option value='8'>Agosto</option>
   <option value='9'>Septiembre</option>
   <option value='10'>Octubre</option>
   <option value='11'>Noviembre</option>
   <option value='12'>Diciembre</option>
   ";
    break;      


case 'diaria':
  if ($_POST["cargoD"] == "NO") {
    echo '<div class="text-center alert alert-danger"><h1><i class="fa fa-bug"></i> Por favor selecciona un cargo valido <i class="fa fa-bug"></i></h1></div>';
  }else{
    $cargoD = $_POST["cargoD"];
  include 'asistenciasCdiaria.php';
}
  break;


  
}


?>

