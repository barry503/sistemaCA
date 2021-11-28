<?php 
// Activamos el almacenamiento en el buffer
ob_start();
session_start();
?>

<!-- cabezera -->
<?php require'includes/header.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br><br> 
     <div class="container">
    <div class="row">
      <div class=" text-center col-lg-12 col-lg-offset-3 p404 centered">
        <img src="../files/img/404.png" alt="">
        <h1>DON'T PANIC!!</h1>
        <h3>No tienes acceso a esta pagina .</h3>
        <br>
        
        <h5 class="mt">Atento!?, si quieres tener acceso a la pagina comunicate con el administrador:</h5>
        <p>
          <a href="Dperfil.php">Volver a my perfil</a> 
          | 
          <a class="btn btn-secondary" href="mailto:<?php echo CORREO_SOPORTE; ?>">Contactar al soporte</a> 

          <!-- |

          <a href="https://api.whatsapp.com/send?phone=503<?php echo $telefono; ?>&text=Hola%20quiero%20realizar%20una%20consulta%20aserca %20del%20sistema%20de%20notas%20"> Contacto 503 + <?php echo $telefono; ?></a> --></p>

          <div class="container">
            <div class="row">
              <div class="col">
                <i style="font-size: 150px;" class="fa fa-bug text-danger"></i>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>


<br><br><br><br><br> 
  </div>
  <!-- /.content-wrapper -->

 
<!-- pie de pajina -->
  <?php require'includes/footer.php'; ?>


<?php 
ob_end_flush();
 ?>