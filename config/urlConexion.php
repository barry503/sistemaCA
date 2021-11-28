<?php /* Connexion a la base de datos y las varibles del nombre de la institucion y etc...*/ 

/*-------------------------/ NIVELES DE CONEXIONES /*-------------------------*/
# Nivel 0
 if ($N1 == 0) {
  # code...
  include 'config/conexionPDOcontacto.php';
  
  #conexion @
  require 'config/global.php';//Contiene las variables de configuracion para conectar a la base de datos
 #Contiene funcion que conecta a la base de datos
  #/conexion @ 
 require 'config/config/conexion.php'; //Contiene funcion que conecta a la base de datos
 }

# Nivel 1
 if ($N1 == 1) {
  # code...
  include '../config/conexionPDOcontacto.php';
  
  #conexion @
  require '../config/global.php';//Contiene las variables de configuracion para conectar a la base de datos
 #Contiene funcion que conecta a la base de datos
  #/conexion @ 
 require '../config/config/conexion.php'; //Contiene funcion que conecta a la base de datos
 }
# Nivel 2
 else if ($N1 == 2) {
  # code...
  include '../../config/conexionPDOcontacto.php';
  
  #conexion @
  require '../../config/global.php';
 #Contiene funcion que conecta a la base de datos
  #/conexion @ 
 require '../../config/config/conexion.php'; 
 }
# Nivel 3
 elseif ($N1 == 3) {
  # code...
  include '../../../config/conexionPDOcontacto.php';
  
  #conexion @
  require '../../../config/global.php';
 #Contiene funcion que conecta a la base de datos
  #/conexion @ 
 require '../../../config/config/conexion.php'; 
 }
# Nivel 4
 elseif ($N1 == 4) {
  # code...
  include '../../../../config/conexionPDOcontacto.php';
  
  #conexion @
  require '../../../../config/global.php';
 #Contiene funcion que conecta a la base de datos
  #/conexion @ 
 require '../../../../config/config/conexion.php'; 
 }

?>

<?php 
###################################VARIABLES##CONSTANTES########################################

$direccion_sql = "SELECT * FROM  infoe WHERE";

$querySoporte = $base->query("$direccion_sql id='1'")->fetchAll(PDO::  FETCH_OBJ);
foreach ($querySoporte  as $s): $var = $s->nombre; define("IMAGEN_SISTEMA", "$var"); endforeach;

$querySoporte = $base->query("$direccion_sql id='2'")->fetchAll(PDO::  FETCH_OBJ);
foreach ($querySoporte  as $s): $var = $s->nombre; define("ABREVIATURA_NOMBRE", "$var"); endforeach;

$querySoporte = $base->query("$direccion_sql id='3'")->fetchAll(PDO::  FETCH_OBJ);
foreach ($querySoporte  as $s): $var = $s->nombre; define("NOMBRE_SISTEMA", "$var"); endforeach;

$querySoporte = $base->query("$direccion_sql id='4'")->fetchAll(PDO::  FETCH_OBJ);
foreach ($querySoporte  as $s): $var = $s->nombre; define("PROPIETARIO", "$var"); endforeach;

$querySoporte = $base->query("$direccion_sql id='5'")->fetchAll(PDO::  FETCH_OBJ);
foreach ($querySoporte  as $s): $var = $s->nombre; define("CORREO_SOPORTE", "$var"); endforeach;

$querySoporte = $base->query("$direccion_sql id='6'")->fetchAll(PDO::  FETCH_OBJ);
foreach ($querySoporte  as $s): $var = $s->nombre; define("NUMERO_TELEFONO", "$var"); endforeach;

$querySoporte = $base->query("$direccion_sql id='7'")->fetchAll(PDO::  FETCH_OBJ);
foreach ($querySoporte  as $s): $var = $s->nombre; define("TWHITTER", "$var"); endforeach;

$querySoporte = $base->query("$direccion_sql id='8'")->fetchAll(PDO::  FETCH_OBJ);
foreach ($querySoporte  as $s): $var = $s->nombre; define("FACEBOOK", "$var"); endforeach;

$querySoporte = $base->query("$direccion_sql id='9'")->fetchAll(PDO::  FETCH_OBJ);
foreach ($querySoporte  as $s): $var = $s->nombre; define("DIRECCION_EMPRESA", "$var"); endforeach;

define("URL_SITIO", "https://sistemaCA.com");

###################################VARIABLES##CONSTANTES########################################

?>