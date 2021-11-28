<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){

  header("Location: login.php");
}else
{





 ?>
<!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../public/plugins/jqvmap/jqvmap.min.css">
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../public/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../public/plugins/summernote/summernote-bs4.css">
  

 <?php require'includes/header.php'; ?>
  

 

<!------------------ empiesan las tarjetas de colores------------------------------>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Escritorio</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">Escritorio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

   <!-- contenedores de las tarjetas de colores acua verde amarillo y rojo -->
   <?php
                           include 'escritorio/contenedores/informacion-tarjetas.php';
                                          ?>






        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">

            <!-- primer grafico opcion Area y Donut -->
 <?php
                           include 'escritorio/contenedores/area-donut.php';
                                          ?>
          





<!-- futuro chat para los usurios de administracion -->

 <?php                  
                           // include 'contenedores/pchat.php';
                                          ?>



<!-- para ver usuarios conectados -->

 <?php
                           include 'escritorio/contenedores/conectados.php';
                                          ?>

                                          
 <?php
// grafico de pastel pequeño
include 'graficos/consultas.php';
include 'escritorio/footer/pieChart.php'; ?>

<!-- calendario -->
       <?php
                           include 'escritorio/contenedores/Calendario.php';
                                          ?> 


  


          </section>
          <!-- /.Left col -->




          <!-- right col (We are only adding the ID to make the widgets sortable)-->



          <section class="col-lg-5 connectedSortable">


<!-- mapa  -->
        <?php
                           include 'escritorio/contenedores/mapa.php';
                                          ?>   




   <!-- grafico lineal -->
            
            <?php
                           include 'escritorio/contenedores/lineal.php';
                                          ?> 





    </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
  </section>
    <!-- /.content -->
  </div>








<?php require'includes/footer.php'; ?>
<!-- jQuery UI 1.11.4 -->
<script src="../public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- ChartJS -->
<script src="../public/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../public/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../public/plugins/jqvmap/jquery.vmap.min.js"></script>
<!-- <script src=".../public/plugins/jqvmap/maps/jquery.vmap.world.js"></script> -->
<script src="../public/plugins/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
<!-- jQuery Knob Chart -->
<script src="../public/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../public/plugins/moment/moment.min.js"></script>
<script src="../public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../public/plugins/summernote/summernote-bs4.min.js"></script>

<!-- para las consultas de los graficos -->
<?php require'escritorio/footer/consultas.php'; ?>
<?php require'escritorio/footer/area-donut-lineal.js.php'; ?>





<?php
 } 
ob_end_flush();
 ?>