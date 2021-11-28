<?php  session_start();

 $usuario =$_SESSION['usuario']; ?>
<?php  /* Connexion a la base de datos y las varibles del nombre de la institucion y etc...*/ 
$N1 = 2;
include '../../config/urlConexion.php'; ?>
<?php



				if (isset($_FILES["imagefile"])){
	
				$target_dir="../../files/usuarios/";
				$image_name = time()."_".basename($_FILES["imagefile"]["name"]);
				$target_file = $target_dir . $image_name;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				$imageFileZise=$_FILES["imagefile"]["size"];
				
					
				
				/* Inicio Validacion*/
				// Allow certain file formats
				if(($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) and $imageFileZise>0) {
				$errors[]= "<p>Lo sentimos, sólo se permiten archivos JPG , JPEG, PNG y GIF.</p>";
				} else if ($imageFileZise > 5048576) {//1048576 byte=1MB
				$errors[]= "<p>Lo sentimos, pero el archivo es demasiado grande. Selecciona logo de menos de 5MB</p>";
				}  else
			{
				
				
				
				/* Fin Validacion*/
				if ($imageFileZise>0){
					move_uploaded_file($_FILES["imagefile"]["tmp_name"], $target_file);
					$logo_update="imagen='$image_name' ";
				
				}	else { $logo_update="";}
                    $sql = $conexionPDO->prepare("UPDATE usuario SET $logo_update WHERE usuario='$usuario'");
                    $query_new_insert = $sql->execute();/*mysqli_query($con,$sql);*/

                   
                    if ($query_new_insert) {
                        ?>
						<img class="profile-user-img img-fluid img-circle" src="../files/usuarios/<?php echo $image_name;?>" alt="sin foto">
						<?php $_SESSION['imagen']=$image_name; ?>
<script >
	     
	     $('.IMAGEN_ACTUALIZADA').attr('src','../files/usuarios/<?php echo $image_name;?>');
	     // $('.IMAGEN_ACTUALIZADA').addClass('cualquier-clase-de-bosstap');
	                    /* Alerta para envio error*/
Swal.fire({
                       /*icon:'success',*/
                       title:'<img width="250px" class=" img-fluid img-circle" src="../files/usuarios/<?php echo $image_name;?>" alt="sin foto">',
                         html: '<h4>FOTO ACTUALIZADA</h4>',
                          // grow: 'fullscreen',
                       footer: 'Cambio Exitoso.'
                   });

</script>						
						<?php
                    } else {
                        $errors[] = "Lo sentimos, No se pudó actualizar tu foto. Intente nuevamente. ".mysqli_error($con);
                    }
			}
		}	
				
					
				
		
	?>
	<?php 
		if (isset($errors)){
	?>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Error! </strong>
		<?php
			foreach ($errors as $error){
				echo $error;
			}
		?>
		</div>	
	<?php
			}
	?>
