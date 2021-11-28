


                <?php 
	if (empty($_POST['usuario'])) {
           $errors[] = "usuario esta vacío";
        }
        else if (empty($_POST['comentario'])) {
           $errors[] = "comentario esta vacío";}


       

           else if (
			!empty($_POST['usuario']) &&
			!empty($_POST['comentario']) 
			
		){
		/* Connect To Database*/
		require_once ("../../config/global.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../../config/config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$usuario=mysqli_real_escape_string($con,(strip_tags($_POST["usuario"],ENT_QUOTES)));
		$comentario=mysqli_real_escape_string($con,(strip_tags($_POST["comentario"],ENT_QUOTES)));

        







		
		$sql="INSERT INTO comentarios_perfil (usuario,comentario) VALUES ('$usuario','$comentario')";



		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = " Enviado...";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>




			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				
				?>

<!-- /.card-comment -->
                <div class="card-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="../files/usuarios/defecto.png" alt="User Image">

                  <div class="comment-text">
                    <span class="username">
                      <?php echo $usuario; ?>
                      <span class="text-muted float-right">Ahora</span>
                    </span><!-- /.username -->
                    <?php echo $comentario; ?>
                  </div>
                  <!-- /.comment-text -->
                </div>



            <?php
						// foreach ($messages as $message) {
						// 		echo $message;
						// 	}

        }
						?>