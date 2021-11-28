 <!-- /.card-body -->
              <div class="card-footer card-comments">


                <!-- <div class="card-comment"> -->
                  <!-- User image -->
                  <!-- <img class="img-circle img-sm" src="../files/img/user3-128x128.jpg" alt="User Image"> -->

                  <!-- <div class="comment-text"> -->
                    <!-- <span class="username"> -->
                      <!-- Maria Gonzales -->
                      <!-- <span class="text-muted float-right">8:03 PM Today</span> -->
                   <!--  </span> --><!-- username -->
                    <!-- lindo dia grupo de guapossss xd. -->
                  <!-- </div> -->
                  <!-- /.comment-text -->
                <!-- </div> -->



               <!--  /.card-comment
                <div class="card-comment">
                  User image
                  <img class="img-circle img-sm" src="../files/img/user5-128x128.jpg" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      Nora Havisham
                      <span class="text-muted float-right">8:03 AM Lunes</span>
                    </span>/.username
                    como puedo acceder al directorio.
                  </div>
                  /.comment-text
                </div> -->

                <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title">Mensajeria Publica</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
<?php 

/* Conexion ala base de datos*/
  require_once ("../config/conexionPDOcontacto.php");


$TRAdatos=$base->query("SELECT c.usuario as us, c.comentario as coment, c.fecha  FROM comentarios_perfil c ")->fetchAll(PDO::  FETCH_OBJ);
      /*WHERE u.usuario=c.usuario*/
 ?><?php // si existe un envio traeme la informacion y inprimela con el mensaje de confirmacion
/*where u.usuario=c.usuario and c.usuario='$usuario' */
  ?>

<?php foreach ($TRAdatos as $conet){ ?> 
                <div class="card-comment">
                  <!-- User image -->
                  <!-- <img class="img-circle img-sm" src="../files/usuarios/defecto.png" alt="usuario"> -->
                  <span class="img-circle img-sm fa  fa-comments"></span>

                  <div class="comment-text">
                    <span class="username">
                      <?php echo $conet->us;  ?>

                      <span class="text-muted float-right"><?php echo $conet->fecha;  ?></span>
                    </span><!-- /.username -->
                    <?php echo $conet->coment;  ?>

                  </div>
                  <!-- /.comment-text -->
                  <p><!-- no comentario --></p>
                </div>

            <?php } ?>

             

                <!-- /.card-comment -->
                 <div  id="respuestaR_ajax">
                 </div><!-- Carga los datos ajax de perfil/enviar_reporte.php -->


                 
              </div>
              <!-- /.card-body -->
            </div>


 <div class="card card-dark">
              <div class="card-header">
                <a href="../chat-usuarios/" target="blank"><h3 class="card-title">Mensajeria Privada</h3></a>
              </div>
            </div>





              </div>
              <!-- /.card-footer -->
              <div class="card-footer">
                <form  method="post" id="reportesU">
                  <img class="img-fluid img-circle img-sm" src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" alt="no img">
                  <!-- .img-push is used to add margin to elements next to floating images -->
                  <div class="img-push">
                    <input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario']; ?>" class="form-control form-control-sm" >
                    <input type="text" class="form-control form-control-sm" name="comentario" id="comA" placeholder="Precione enter para enviar comentario..." >
                  </div>
                </form>
              </div>

              
