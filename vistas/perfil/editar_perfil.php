<?php  /* Connexion a la base de datos y las varibles del nombre de la institucion y etc...*/ 
$N1 = 2;
include '../../config/urlConexion.php'; ?>
<?php 
	if (empty($_POST['idusuario'])) {
           $errors[] = "idusuario esta vacío";
        }
        else if (empty($_POST['nombre'])) {
           $errors[] = "nombre esta vacío";}

        else if (empty($_POST['apellido'])) {
           $errors[] = "apellido esta vacío";}

        // else if (empty($_POST["imagen"])) {
        //    $errors[] = "introduce una imagen ";}

        else if (empty($_POST['usuario'])) {
           $errors[] = "usuario esta vacío";}

        else if (empty($_POST['clave'])) {
           $errors[] = "clave esta vacío";}

         else if (empty($_POST['email'])) {
           $errors[] = "email esta vacío";}

           else if (empty($_POST['telefono'])) {
           $errors[] = "telefono esta vacío";}

           else if (empty($_POST['direccion'])) {
           $errors[] = "direccion esta vacío";}

           else if (
			!empty($_POST['idusuario']) &&
			!empty($_POST['nombre']) &&
			!empty($_POST['apellido']) &&
			// !empty($_POST['imagen']) &&
			!empty($_POST['usuario']) &&
			!empty($_POST['clave']) &&
			!empty($_POST['email']) &&
			!empty($_POST['telefono']) &&
			!empty($_POST['direccion'])
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		$idusuario=mysqli_real_escape_string($con,(strip_tags($_POST["idusuario"],ENT_QUOTES)));
		$nombre=mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$apellido=mysqli_real_escape_string($con,(strip_tags($_POST["apellido"],ENT_QUOTES)));
		 // $imagen=mysqli_real_escape_string($con,(strip_tags($_POST["imagen"],ENT_QUOTES)));
		$usuario=mysqli_real_escape_string($con,(strip_tags($_POST["usuario"],ENT_QUOTES)));
        $clave=mysqli_real_escape_string($con,(strip_tags($_POST["clave"],ENT_QUOTES)));
		$email=mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES)));
		$telefono=mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
		$direccion=mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
        








        #encriptar la contraseña 
$clavehash=hash("SHA256",$clave); 

// imagen='$imagen',
		
		$sql= $conexionPDO->prepare("UPDATE usuario SET nombre='$nombre', apellido='$apellido', usuario='$usuario', clave='$clavehash', email='$email', telefono='$telefono', direccion='$direccion' 
         WHERE idusuario='$idusuario' ");



		$query_update = $sql->execute();/*mysqli_query($con,$sql);*/
			if ($query_update){
				$messages[] = " Tus Datos personales  han sido actualizados satisfactoriamente.";
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
				
				?><br>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Genial...!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php $_SESSION['nombre']=$nombre; ?>
				<?php $_SESSION['apellido']=$apellido; ?>
				<?php $_SESSION['usuario']=$usuario; ?>
				<?php $_SESSION['email']=$email; ?>
				

<script >
	     
	     $('.NOMBRE_USUARIO').html('<?php echo $nombre; ?>');
	     $('.APELLIDO_USUARIO').html('<?php echo $apellido; ?>');
	     $('.USUARIO_USUARIO').html('<?php echo $usuario; ?>');
	     $('.CORREO_USUARIO').html('<?php echo $email; ?>');	     
	     
	     // $('.IMAGEN_ACTUALIZADA').addClass('cualquier-clase-de-bosstap');
	                    /* Alerta para envio error*/
Swal.fire({
                       icon:'success',
                       title:'INFORMACION ACTUALIZADA',
                         // html: '<h4>FOTO ACTUALIZADA</h4>',
                          // grow: 'fullscreen',
                       footer: 'Cambios Exitosos.'
                   });

</script>

				<?php
			                     }    ?>

