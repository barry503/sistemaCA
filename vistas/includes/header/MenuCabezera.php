<?php 
# consulta para contar mensajes 
          $identificadorUserEnlinea = $_SESSION['idusuario'];
          $sqlcountSms=$base->query("SELECT COUNT(*) as countUsuarios FROM usuario 
          WHERE status='En linea' AND idusuario != '$identificadorUserEnlinea' ")->fetchAll(PDO::  FETCH_OBJ);
 #vista de los usuarios en linea
            $vermensa=$base->query("SELECT i.idusuario,i.usuario,i.usuario,i.imagen,i.status,i.unique_id
            FROM usuario i WHERE i.status='En linea' AND idusuario != '$identificadorUserEnlinea' ")->fetchAll(PDO::  FETCH_OBJ);          

?>
  <!-- Navbar   colores que puedes elegir navbar-white , navbar-yellow, navbar-green-->
  <nav class="main-header navbar navbar-expand navbar-orange navbar-light"><!-- navbar-light -->
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Descritorio.php" class="nav-link">Escritorio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="DContactos.php" class="nav-link">Contactos</a>
      </li>

 <li class="nav-item d-none d-sm-inline-block">
    <!--id=TimeZone=zona horaria traida de ip-api/json -->
        <a href="#" class="nav-link" id="TimeZone"></a>
      </li>


    </ul>


<ul class="navbar-nav ml-auto">
    <!-- id=C_time=hora actual -->
        <!-- <li id="C_time" class="nav-item text-gray">

        
      </li> -->

</ul>  
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
<!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa fa-users"></i>
          <?php foreach ($sqlcountSms  as $key): $countUsuarios= $key->countUsuarios; endforeach; ?>
          <span class="badge badge-success navbar-badge"><?php echo $countUsuarios; ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <?php foreach ($vermensa as $vuser): ?> 
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img  src="../files/usuarios/<?php echo $vuser->imagen;  ?>"  alt="img" class="IMAGEN_ACTUALIZADA img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?php echo $vuser->usuario;  ?> 
                  <span class="float-right text-sm text-danger"><i class="fa fa-circle text-success"></i></span>
                </h3>
                <!-- <p class="text-sm">Nuevo mensaje...</p> -->
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> <?php echo $vuser->status;  ?></p>
              </div>
            </div>

             <div class="dropdown-divider"></div>
            <!-- Message End -->
               <?php endforeach; ?>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">
            <?php echo ($countUsuarios)? '<i class="fa fa-circle text-success"></i> Usuario en linea '.$countUsuarios : '<i class="fa fa-warning text-warning"></i> ningun usuario en linea'; ?></a>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->



<!-- perfil en cabezera -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" >
          <!-- imagen de usuario -->
          <img  src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="IMAGEN_ACTUALIZADA user-image img-circle elevation-2" alt="usuario">
          <span class="d-none d-md-inline USUARIO_USUARIO"><?php echo $_SESSION['usuario']; ?></span>
        </a>

        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <li class="user-header  Opsoletobg-secondary bg-orange">
          <!-- imagen de usuario -->
            <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="IMAGEN_ACTUALIZADA img-circle elevation-2" alt="usuario">
            <p>
              <span class="NOMBRE_USUARIO"><?php echo $_SESSION['nombre']; ?></span>
              ,<span class="APELLIDO_USUARIO"><?php echo $_SESSION['apellido']; ?></span>
              <small ><!--id="Contadorfecha" 2020 El salvador-santa Tecla -->
               <?php echo date("D-d-M-Y");/*, strtotime("+ HOURS")*/ ?>
                <!-- p para ver fecha de hoy -->
               <!-- <p id="C_date"></p> -->
              </small>
            </p>
          </li>
           <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-6 text-center">
                <a href="#">Bienvenido:</a>
              </div>
              <div class="col-6 text-center">
                <a href="#"><i class="fa fa-circle text-success"></i> En linea<!-- <i class="fa fa-users"></i> --></a>
              </div>
<!--               <div class="col-4 text-center">
                <a href="#">sistema <i class="icon-deno"></i></a>
              </div> -->
            </div>
            <!-- /.row -->
          </li>
          </li>


          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="Dperfil.php" class="btn btn-default btn-flat">
                       Perfil 
          </a>
             <!-- href="../ajax/editablas/ajax_Usuario.php?op=salir" No funciona en el hosting-->
             <?php /*Variable para cerrar la session*/ $usuario0salirXD = $_SESSION['usuario']; ?>
             <?php /*Variable para cerrar la session*/ $ImgSalirXD = $_SESSION['imagen']; ?>

             <input type="hidden" name="usuario0salirXD" value="<?php echo $usuario0salirXD; ?>">
             <input type="hidden" name="ImgSalirXD" value="<?php echo $ImgSalirXD; ?>"> 
           
           <a  onclick="FCerrandOSecion()" class="btn float-right  btn-default btn-flat"> 
                   Cerrar Sesión <i class=" fa  fa-power-off"></i>  
           
           </a>

          </li>
        </ul>
      </li>
<!-- Fin de perfil en cabezera -->


      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->