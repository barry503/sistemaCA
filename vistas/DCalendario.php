<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){

  header("Location: login.php");
}else
{
 ?>


 <!-- fullCalendar -->
  <link rel="stylesheet" href="../public/plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="../public/plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="../public/plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="../public/plugins/fullcalendar-bootstrap/main.min.css">
 <?php require'includes/header.php'; ?>








<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sistema</a></li>
              <li class="breadcrumb-item active">Calendario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Draggable Events</h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                    <div class="external-event bg-success"><!-- Lunch -->Almuerzo</div>
                    <div class="external-event bg-warning"><!-- Go home -->ir a casa</div>
                    <div class="external-event bg-info"><!-- Do homework --> regresar del tabajo</div>
                    <div class="external-event bg-primary"><!-- Work on UI design  -->trabajar diseño </div>
                    <div class="external-event bg-danger"><!-- Sleep tight --> dormir por la noche</div>
                    <div class="checkbox">
                      <label for="drop-remove">
                        <input type="checkbox" id="drop-remove">
                        <!-- remove after drop -->remover y borrar de la lista
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><!-- Create Event --> Crear Evento</h3>
                </div>
                <div class="card-body">
                  <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                    <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                    <ul class="fc-color-picker" id="color-chooser">
                      <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <div class="input-group">
                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                    <div class="input-group-append">
                      <button id="add-new-event" type="button" class="btn btn-primary"><!-- Add --> Añadir</button>
                    </div>
                    <!-- /btn-group -->
                  </div>
                  <!-- /input-group -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->














<?php require'includes/footer.php'; ?>



<!-- jQuery UI -->
<script src="../public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="../public/plugins/moment/moment.min.js"></script>
<script src="../public/plugins/fullcalendar/main.min.js"></script>
<script src="../public/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="../public/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="../public/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="../public/plugins/fullcalendar-bootstrap/main.min.js"></script>
<script src="scripts/Calendario.js"></script>


 
<?php
 } 
ob_end_flush();
 ?>

 