<?php if(strlen(session_id()) < 1)
session_start();
 ?>
<?php  /* Connexion a la base de datos y las varibles del nombre de la institucion y etc...*/ 
$N1 = 1;
include '../config/urlConexion.php'; ?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- consultas para el proyecto -->
  <title><?php echo ABREVIATURA_NOMBRE; ?> | <?php echo NOMBRE_SISTEMA; ?> </title>
  <link rel="shortcut icon" href="../files/imgInstitucion/<?php echo IMAGEN_SISTEMA; ?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, user-scalable=no,
   initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


<!-- <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css"> -->

  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  
  <!-- Font Awesome Icons -->
  <!-- <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css"> -->
<link href="../public/plugins/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../public/plugins/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">


<!-- pace-progress barra de progreso verde de arriba -->
  <link rel="stylesheet" href="../public/css/pace-progress/themes/black/pace-theme-flat-top.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
  


 <!--datatables CSS básico-->
     <!-- DataTables -->
  <link rel="stylesheet" href="../public/datatables/datatables.min.css">

<!-- Fin datatables -->

<!-- para usar el select con otra tabla -->
<link rel="stylesheet" type="text/css" href="../public/bootstrap-select/css/bootstrap-select.min.css">


<!-- para precargar de la pagina -->
<link rel="stylesheet" media="screen" href="../public/precargaP/cargar.css">



</head>
<body id="bodyman" class="hold-transition sidebar-mini pace-dark bodyman">



<div class="wrapper">




  <!-- Page Preloder precarga de pagina -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


<!-----------------------------------------Inicio MenuCabezera--------------------------------------->



<?php require'includes/header/MenuCabezera.php'; ?>


<!--------------------------------------Fin MenuCabezera------------------------------------->






<!-- ------------------------------------Inicio MenuDerecho-------------------------------------- -->
  <!-- Main Sidebar Container -->
  <!-- estilo defecto <aside class="main-sidebar sidebar-dark-primary elevation-4"> -->
  <aside class="main-sidebar sidebar-dark-orange  elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../files/img/<?php echo IMAGEN_SISTEMA; ?>" alt="<?php echo ABREVIATURA_NOMBRE; ?>" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo ABREVIATURA_NOMBRE; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar " > <!-- badge-info -->
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img  src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="IMAGEN_ACTUALIZADA img-circle elevation-2" alt="usuario Img">
        </div>
        <div class="info">
          <a href="#" class="d-block USUARIO_USUARIO"><?php echo $_SESSION['usuario']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <a href="Dperfil.php" class="nav-link bg-gray active mb-2">
                  <i class="far fa-user nav-icon"></i>
                  <p>Perfil</p>
                </a>

   <li class="nav-item has-treeview menu-open">  
            <a href="#" class="nav-link active">
              <i class="nav-icon fas  fa fa-th "></i>
              <p>
                Sistema
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>   

            <ul class="nav nav-treeview">
              
             <li class="nav-item">
                <a href="#" class="nav-link bg-blank active">
                  <i class="fa fa-clock nav-icon"></i>
                  <p class="horaphp"></p>
                </a>

                <a href="Descritorio.php" class="nav-link bg-success active">
                  <i class="fa fa-desktop nav-icon"></i>
                  <p>Escritorio</p>
                </a>


              </li>

            </ul>


          </li>



<li class="nav-header"><i class="nav-icon fa  fa-wrench"></i> <i class="nav-icon fa  fa-sitemap "></i> Accesos </li>

<!--
<a href="vistaAsistencia.php" class="nav-link" title="Ver todas las asistencias del dia por cargo ">
                  <i class="far fa  fa-check nav-icon"></i>
                  <p>Asistencias diarias</p>
                </a>
                 -->
 



<!-- Apartado de mas herramientas de sistema -->
<!-- <li class="nav-header"><i class="nav-icon fa  fa-wrench"></i> Mas herramientas </li> -->
<!-------------------------------------- Mas herramientas del sistema------------------------------------------  -->
<?php require'includes/header/MasHerramientas.php'; ?>
<!------------------------------------ / Mas herramientas del sistema------------------------------------------  -->
<!-- / Apartado de mas herramientas de sistema -->
                  <li class="nav-item">
                <a href="vistaAsistencia.php"  class="nav-link" title="Ver todas las asistencias del dia por cargo ">
                  <!-- <i class="far fa  fa-list-alt nav-icon"></i> -->
                  <i class="far fa  fa-file nav-icon"></i>
                  <p>Reporte de Asistencias</p>
                </a>
              </li>


<!-- Apartado de Accesos Públicos de sistema -->
<li class="nav-header">Accesos Públicos</li>

          <li class="nav-item">
            <a href="DCalendario.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendario
                <span class="badge badge-primary right">new</span>
              </p>
            </a>
          </li>
                  <li class="nav-item">
                <a href="noacceso.php"  class="nav-link" title="Ver todas las asistencias del dia por cargo ">
                  <!-- <i class="far fa  fa-list-alt nav-icon"></i> -->
                  <i class="far fa  fa-bug nav-icon"></i>
                  <p>Mensaje <i class="badge badge-danger">404</i></p>
                </a>
              </li> 


          <!-- PROGRAMADORES O DESARROLLADORES -->
          <li class="nav-item">
            <a href="https://github.com/barry503" target="blank" class="nav-link">
              <i class="nav-icon fa fa-coffee text-info"></i>
              <p>Programador Barry503</p>
            </a>
          </li>
<!--/ Apartado de Accesos Públicos de sistema -->
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



<!-- ----------------------------------------- Fin MenuDerecho------------------------------- -->