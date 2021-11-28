<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){

  header("Location: login.php");
}else
{


 ?>
<?php require'includes/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../ajax/vistablas/estilosReportes.css">



<!-- Contenedor de todo -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
                <h1 >Ver asistencias diarias.</h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">1 tipo de reporte</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- seccion del contenido -->
<section class="content ">



<div class="card ">
  <p class="text-center card-title"><br><br>
    <i style="font-size: 60px;" class="fa fa-user"></i> <i style="font-size: 40px;" class="text-success fa fa-check"></i><br>
    En esta pagina puedes visualizar  las asistencias diarias <br> de los Empleados <br><br>
  </p>

</div>
       



<!-- inicio card -->
 <div class="card">
  <!-- inicio card-header-->
  <div class="card-header">
    <h3 class="card-title">
      <h2>Asistencias  del dia de hoy</h2>
      <form method="POST" id="Adiaria">
        Cargo: <select name="cargoD" id="cargoD" class="btn btn-outline-dark selectpicker" data-live-search="true"  ></select>   <button type="submit" class="btn btn-lg btn-dark">consultar</button>
      </form>
    </h3>              
  </div><!-- / fin card-header-->
 <!-- inicio card-body  -->
 <div class="card-body py-5" >
   <div id="RespuestaAdiaria"><!-- Aqui se recibe la respuesta de la consulta --></div>
 </div>  <!-- / fin  card-body   -->
 </div>  <!-- / fin card  -->





</section>
  <!--fin de  seccion del contenido -->


</div>
<!-- fin  Contenedor de todo -->








<?php require'includes/footer.php'; ?>

<!-- libreria que imprime cualquier area de la pagina -->
<script  src="../public/libImprimidora/jquery.PrintArea.js"></script>


<!-- libreria para el boton de  guardarYactualizar=btnGuardar  para usar actualizacion de pagina-->
<script  src="../public/sweetalert2@9/sweetalert2@9.js"></script>

<!-- contiene todo el contenido del DataTable -->
<script  src="scripts/vistablas/vistaAsistencia.js"></script>


<?php
 } 
ob_end_flush();
 ?>