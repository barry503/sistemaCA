<?php  /* Connexion a la base de datos y las varibles del nombre de la institucion y etc...*/ 
$N1 = 2;
include '../../config/urlConexion.php'; ?>
<!-- respetar espacios saltos de lineas e incluso los comentarios podrian dar margen de error
 -->
<?php

	/*Inicia validacion del lado del servidor*/


	// si existe la variable idempleado 
	if ($_POST['idempleado']) {
	//var para  verificar asistencia
		$idempleado=$_POST["idempleado"];
		
		// date_default_timezone_set('America/El_Salvador');
		$FechadeHoy =  date_default_timezone_set('America/El_Salvador');
		$FechadeHoy = date("Y-m-d");// $FechadeHoy = date("Y-m-d H:m:s");  /*Y=año m=mes d=dia*/


        #preparando la consulta
		$preparando = $conexionPDO->prepare("SELECT  fecha FROM asistencia WHERE   idempleado='$idempleado' AND fecha='$FechadeHoy'");
		#ejecuta la consulta...
		$preparando->execute();/*array(':idempleado' => $idempleado)*/

		$resultado =  $preparando->fetch();#la consulta $preparando devuelve true o false
		// echo $FechadeHoy;
		// si el resultado no es igual a falso
		if ($resultado != false) {
		#ejecuta ...
			$errors[] = "El empleado ya relizo <br> su asistencia del dia... ";
		}else {

			# limpiar el campo de las etiquetas html
			/*$idempleado=mysqli_real_escape_string($con,(strip_tags($_POST["idempleado"],ENT_QUOTES)));*/
		    $idempleado= $_POST["idempleado"];
		    $SAVEasistencia = "";

		// insercion en asistencia 
		    // validar existencia del empleado
		    $existeempleado = $conexionPDO->prepare("SELECT * FROM empleado WHERE idempleado='$idempleado'");
		    $existeempleado->execute();
		    $existeempleado = $existeempleado->fetch();
		    if ($existeempleado == true) {
		$sqlAsistencia=$conexionPDO->prepare("INSERT INTO asistencia(idempleado, fecha) VALUES ('$idempleado', '$FechadeHoy')");
		$SAVEasistencia = $sqlAsistencia->execute(); /*mysqli_query($con,$sqlAsistencia);*/ /*con la variable $SAVEasistencia efectuo la query*/
		    }


		
		  # condicional para comprobar el envio a tabla asistencia
		if ($SAVEasistencia) {
			
			$messages[] = " Tu asistencia se registro  satisfactoriamente.";
 ?>

	   <!-- condicional si existe $messages ejecuta la consulta		 -->
<?php  if (isset($messages)){ ?>
	<!-- <div class="alert col-md-12" role="alert" > -->
		<!-- aqui contenedor de las alertas -->
		<!-- <button type="button" class="close" data-dismiss="alert" ><p style="color: #fff;">&times;</p></button> -->
		<!-- <strong>¡Muy Bien!</strong> --><!--No mover o sino no funcionara la validacion ni mostrara los datos -->
		<!-- <p class="lead content"> -->
<?php
# si existe un envio traeme la informacion y inprimela con el mensaje de confirmacion
if ($SAVEasistencia) {

  $query_datos= $base->query("SELECT * FROM empleado WHERE idempleado='$idempleado'")->fetchAll(PDO::  FETCH_OBJ);
 /*mysqli_query($con,"select * from empleado where idempleado='$idempleado'");*/
  /*$Tdatos=mysqli_fetch_array($query_datos); */
  ?>
<?php foreach ($query_datos as $da): ?>

  <img  style="border-radius: 10px;" width="150px" height="150px"  src="../files/empleado/<?php echo $da->foto; ?>">
          <h3 class="display-5">N° identificacion: <br> <?php echo $da->idempleado; ?></h3>
          <h2 class="lead">Nombre Completo:<br> <?php echo $da->nombre.' , '.$da->apellido; ?>.</h2>
          <!-- <h2 class="lead">"Bienvenido".</h2> -->


    <!-- </p> -->
<?php $scrit_nombre = $da->nombre; 
      $scrit_apellido = $da->apellido;
      $scrit_foto = $da->foto; ?>
<?php endforeach; ?>

<?php if (isset($_POST['lectorA'])==1){ ?>
<?php  $lectorA = $_POST['lectorA']; ?>
	<script>
  Swal.fire({
                       /*icon:'success',*/
                       title:'<img width="120px" height="130px"  src="../files/empleado/<?php echo $scrit_foto; ?>"  alt="sin foto">',
                         html: '<h4>BIENVENIDO/A <br> <?php echo $scrit_nombre." , ".$scrit_apellido; ?></h4><br>Asistencia Registrada',
                          // grow: 'fullscreen',
                       footer: 'Asistencia del dia de hoy <?php echo date("d-M-Y"); ?> '
                   });
</script>
<?php } ?>


   <?php } ?> <!-- final de traida de datos o end -->
						<?php //CICLO PARA EL MENSAJE DE CONFIRMACION dentro del condicional de existencia de var messages
							foreach ($messages as $message) {
									echo $message;
								}
							?>
						
				<!-- </div> -->
				<?php
			}
//Cerrar conexion
// mysqli_close($con);
?>




 <?php 

		}else {
			$errors []= "Lo siento algo ha salido mal intenta nuevamente.<br> el idempleado no coinside con ninguno de nuestra base de datos...".mysqli_error($con);

		}

		}
	}else {
        	$errors[] = "idempleado esta vacío <br>Por favor introduce un idempleado en el campo";
        }
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong>
					 <!-- ciclo para los errores o errors -->
					<?php
						foreach ($errors as $error) {
								echo $error;
							
						?>
							<script>
                       Swal.fire({
                       icon:'error',
                       title:'<?php echo $error; ?>'
                        // grow: 'fullscreen'
                   });
                    </script>
                                <?php } ?>
			</div>


		<?php } ?>



<script> $(".idempleado").val(""); </script>

