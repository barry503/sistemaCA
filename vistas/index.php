<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();  /*Con php*/
if(!isset($_SESSION["usuario"])){

 header("Location: login.php");
}else
{
header("Location: Dperfil.php");
}

ob_end_flush();
 ?>