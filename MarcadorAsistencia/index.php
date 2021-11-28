<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){

  header("Location: ../vistas/Dperfil.php");
}else
{

 

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <title>Para Lector fisico de codigo de barra</title>
  
  <!-- archivo para  CSS  de boostrap-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/cover.css">

  <!--external css iconos-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />

 <link href="img/barcode.png" rel="icon"  > <!-- style="color:#17a2b8;" -->
</head>
<body>


<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto iboton">
    <div class="inner">
      <h2 class="masthead-brand text-white"> Para lector fisico BarCode <i class="fa fa-barcode"></i></h2>
       
      <nav class="nav nav-masthead justify-content-center">
        <a class="  btn btn-lg btn-dark" href="../vistas/vistaAsistencia.php"> <i class="fa fa-file"></i>  ver Reportes  </a>
     <!--    <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a> -->
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">


    <div class="row mb-2">

<div class="col-md-6 py-3" align="center">
   

   <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden ">
      <!-- <div class="my-2 p-2"></div> -->
      <div class="bg-teal shadow-sm mx-auto" 
       style="width: 80%; height: auto; border-radius: 21px 21px 0 0;">
        <div class="py-3">
          <div class='col-md-12' id="inprimir_datosEntrada">
          <img style="border-radius: 10px;" width="150px" height="150px"   src="img/root.png">
          <h3 class="display-5">N° identificacion: <br> root</h3>
          <h2 class="lead">Nombre Completo:<br> lorem , root.</h2>
          <h2 class="lead">"Bienvenido".</h2>            
          </div>


        </div>
      </div>
    </div>


            <!-- <img  style="border-radius: 10px;" width="110px" height="120px" src="img/logo.jpg"> -->

              <h1 class="cover-heading " ><!-- Marcar -->  
               <i class="text-success iboton"> Entrada. 
                 <i style="font-size: 40px;" class=" fa fa-street-view">
                 </i>
               </i> 
              </h1>
              <form method="post" id="enviandoEntrada">

                <input class="form-control btn-lg mr-sm-1 col-md-8  idempleado" name='idempleado' id="idempleado" type="number" placeholder="Coloca el carnet en el lector" autocomplete="off" ><!-- pattern="[A-Za-z0-9_-]{1,15}" -->
                <input type="hidden" name="lectorA" value="1">

                <br>
                <button type="submit" class="btn btn-lg btn-dark col-md-8" >Marcar <i class="text-success">Entrada</i></button>
                
                
                         </form>
</div>

            
<div class="col-md-6 py-3" align="center">
  
   
   <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden ">
      <!-- <div class="my-2 p-2"></div> -->
      <div class="bg-red shadow-sm mx-auto"
       style="width: 80%; height: auto; border-radius: 21px 21px 0 0;">
        <div class="py-3">
          <div class='col-md-12' id="inprimir_datosSalida">
          <img style="border-radius: 10px;" width="150px" height="150px"   src="img/root.png">
          <h3 class="display-5">N° identificacion: <br> root</h3>
          <h2 class="lead">Nombre Completo:<br> lorem , root.</h2>
          <h2 class="lead">"Feliz Viaje".</h2>             
          </div>
        </div>
      </div>
    </div>   

            <!-- <img  style="border-radius: 10px;" width="110px" height="120px" src="img/logo.jpg"> -->
            <h1 class="cover-heading"><!-- Marcar --> 
              <i class="text-danger iboton"> Salida. 
                <i style="font-size: 40px;" class=" fa fa-street-view">
                </i>
              </i>
            </h1>


              <form method="post" id="enviandoSalida">
                <input class="form-control btn-lg mr-sm-1  col-md-8 idempleado" name='idempleado' id="idempleado" type="number" placeholder="Coloca el carnet en el lector" autocomplete="off" ><!-- pattern="[A-Za-z0-9_-]{1,15}" -->
                <br>
                <button type="submit" class="btn btn-lg btn-secondary col-md-8 " >Marcar <i class="text-danger">Salida</i></button>
                
                
                         </form>
</div>







</div>
   
 
  </main>



  <footer class="mastfoot mt-auto iboton text-center btn-dark">
    
        <br><br>
        <h2>Puedes utilizarlo en windows <i class="fa fa-windows"></i> con un lector de codigo de barra <i class="fa fa-barcode"></i></h2>
    <div class="inner">
      <p> Sistema de Marcacion <a href="#">version 4 </a> | <a href="https://github.com/barry503">Barry503 <i class="fa fa-github"></i></a></p>
    </div>


  </footer>



</div>



<!-- script de para boostrap  -->

<script src="bootstrap/js/primero.js"></script>
<script src="bootstrap/js/segundo.js"></script>
<script src="bootstrap/js/tercero.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- CARPETA DE JS -->
<script src="js/jquery.min.js"></script>



<!-- scripts para enviar datos con json por medio de ajax 
No alterar estructura
 -->

<script src="js/peticiones.js"></script>




</body>
</html>


<?php

 } 
ob_end_flush();
 ?>
 