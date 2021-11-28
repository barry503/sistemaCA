<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Sistema De Marcacion...</title>

  <!-- Favicons style="color:#17a2b8;"-->
  <!-- <link href="img/house.svg" rel="icon"  > -->
     <!-- <link href="img/weathe.jpg" rel="apple-touch-icon"> -->
     <link href="img/logo.jpg"  rel="icon" >

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">


<!-- para precargar de la pagina -->
<link rel="stylesheet" media="screen" href="../public/precargaP/cargar.css">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->

</head>

<body onload="getTime()" id="bodyman" class="bodyman">

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <div class="container">
  <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="#" class="btn btn-secondary"></a>
                </div>
            </div>
        </div>


       <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="../vistas/Dperfil.php" class="btn btn-primary">volver a mi Perfil</a>
                </div>
            </div>
        </div>
    </div>

<?php

include'index-login/inde.php';
?>

               
         <div id="showtime"></div> 
         
         


  <div class="container">


<div align="center">
<i class="fa fa-street-view"  style="color: #f8f9fa; font-size: 100px;"></i>
         </div>

   



    <div class="col-lg-4 col-lg-offset-4">

      <div class="lock-screen">
        <h2><a data-toggle="modal" href="#myModal"><i class="fa fa-lock"></i></a></h2>
        <p>Preciona el candado.</p>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Bienvenido Usuario <i class="fa fa-street-view"></i></h4>
              </div>

    <form  method="POST" >
              <div class="modal-body">
                <p class="centered"><i class="fa fa-lock" style="font-size: 100px;"></i><!-- <img class="img" width="500" src="img/weathe.jpg"> --></p>
 <?php if(!empty($errores)): ?>

               <div class="alert alert-danger alert-dismissable col-md-offset-1 col-md-10 text-center">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <?php echo $errores; ?>

               </div>

               <?php endif; ?>

       <!--  <input type="text" name="usuario" placeholder="Escribe ceav"  class="form-control placeholder-no-fix">
                <br> -->
        <input type="password" name="codigo" placeholder="Escribe el codigo de accesso" class="form-control placeholder-no-fix"><br>

              </div>
              <div class="modal-footer centered">
                <button data-dismiss="modal" class="btn btn-theme04" type="button">Cancelar</button>
              <button  type="submit" name="entrar" class="btn btn-theme03">acceder</button> 
              <!-- <a href="marcador.php"></a> -->
              
              </div>
</form>

  



<h5 class="text-center">login marcador de asistencia...</h5>
            </div>
          </div>
        </div>
        <!-- modal -->
      </div>
      <!-- /lock-screen -->
    </div>
    <!-- /col-lg-4 -->
  </div>
  <!-- /container -->

<h1 class="text-center " style="color: #20c997;" >login Marcador de asistencia...</h1>
  <h3 class="text-center" style="color: #f8f9fa;" >!Bienvenido|Usuario. </h3>


 <?php if(!empty($errores)): ?>

               <div class="alert alert-danger alert-dismissable col-md-offset-1 col-md-10 text-center">

  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <?php echo $errores; ?>

               </div>

               <?php endif; ?>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/lock.jpg", {
      speed: 500
    });
  </script>
  <!-- para el reloj -->
  <script src="js/reloj.js"></script>

  <!-- para precarga de la pagina -->
<script src="../public/precargaP/Fcargar.js"></script>

</body>

</html>
