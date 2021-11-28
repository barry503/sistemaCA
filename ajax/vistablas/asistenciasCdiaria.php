<?php 
#consulta para el nombre del cargo 
    $querynmbreCargo = $base->query("SELECT  idcargo,nombre_cargo FROM cargo WHERE   idcargo='$cargoD' ")->fetchAll(PDO::  FETCH_OBJ);
    foreach ($querynmbreCargo  as $q){$Cargonamer = $q->nombre_cargo; }


    $fechaHoy = date_default_timezone_set('America/El_Salvador');# Zona Horaria
    $fechaHoy = date("d-m-Y g:i:s a");
    $Hoyy = date("Y-m-d");
    
#consulta para el nombre del orientador
    $querynmbreCargo1 = $base->query("SELECT d.idusuario,CONCAT(d.nombre,' , ',d.apellido) as nombre_orientador,g.idcargo,g.idusuario
    	FROM  usuario d INNER JOIN cargo g ON   g.idcargo='$cargoD' AND d.idusuario=g.idusuario")->fetchAll(PDO::  FETCH_OBJ);
    foreach ($querynmbreCargo1  as $q){$ORIENTADORCargo = $q->nombre_orientador; }

#consulta para los empleado
    // $queryempleado = $base->query("")->fetchAll(PDO::  FETCH_OBJ);
    $queryempleado=$base->query("SELECT  a.idempleado,CONCAT(a.apellido,' , ',a.nombre) as nombre_alumno, a.idcargo FROM empleado a WHERE   idcargo='$cargoD' ORDER BY a.apellido,a.nombre DESC")->fetchAll(PDO::  FETCH_OBJ);

 ?>
 <button class="btn btn-lg btn-dark" onclick="inprimir1()">Imprimir</button>
<br><br>
<div id="idTablaprint1">

	<header class="clearfix">
		<div class="container">
			<figure>
				<img class="logo" src="../files/img/<?php echo IMAGEN_SISTEMA; ?>" alt="logo">
			</figure>
			<div class="company-info">
				<h2 class="title text-left"><?php echo ABREVIATURA_NOMBRE; ?></h2>
				<span><?php echo NOMBRE_SISTEMA; ?></span>
				<!-- <span class="line"></span> -->
				
				<!-- <span class="line"></span> -->
				
			</div>
		</div>
	</header>

	<section>
		<div class="details clearfix">
			<div class="client  text-left">
				<p>Supervisor Encargado:</p>
				<p class="name"><?php echo $ORIENTADORCargo; ?></p><br>
				<p>FECHA :  <?php echo $Hoyy; ?>
				</p>
				<!-- <a href="mailto:nadie@example.com">nadie@example.com</a> -->
			</div>
			<div class="  text-right">
				<div class="title  "> <?php echo $Cargonamer; ?></div>
				<div class="date">
					<!-- Date of Invoice: 01/06/2014 -->
					<br>
					Fecha de generacion del reporte:   <?php echo $fechaHoy; ?>
				</div>
			</div>
		</div>
		
	
<!-- -------------------------------------------------------------- -->


<table border="0" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th class="qty">ID EMPLEADO</th>
						<th class="desc">NOMBRE COMPLETO</th>
						<th class="unit">MARCARON ENTRADA</th>
						<th class="unit">MARCARON SALIDA</th>
				
					</tr>
				</thead>
				<tdiv>
					<?php foreach ($queryempleado  as $q): ?>
						<?php $idempleadocompa = $q->idempleado; ?>

						
					<tr>
						<td class="qty"><?php echo $q->idempleado; ?></td>
						<td class="desc"><?php echo $q->nombre_alumno; ?></td>
						<?php 
						$sqlcontar=$base->prepare("SELECT idempleado FROM asistencia 
							WHERE idempleado='$idempleadocompa' AND fecha LIKE '%$Hoyy%'");
					/*SELECT idempleado FROM asistencia WHERE idempleado='$idempleadocompa' AND fecha LIKE '%$fechaD%' AND fecha LIKE '%$fechaH%' */
						$sqlcontar->execute(); 
						$TotalAsistencias = $sqlcontar->rowCount();
						?>
                            
				        <td class="unit">
				        	<?php
				        	if ($TotalAsistencias > 0) {
				        	?>
				        	   <p class="text-success"><b>SI</b></p>
				        	
				        	<?php }else{ ?>
				        		
				        		<p class="text-danger"><b>NO</b></p>

				        	<?php } ?>
				        	
				        		
				        </td>
						<?php 
						$sqlcontarS=$base->prepare("SELECT idempleado FROM salida 
							WHERE idempleado='$idempleadocompa' AND fecha LIKE '%$Hoyy%'");
					/*SELECT idempleado FROM asistencia WHERE idempleado='$idempleadocompa' AND fecha LIKE '%$fechaD%' AND fecha LIKE '%$fechaH%' */
						$sqlcontarS->execute(); 
						$TotalSalida = $sqlcontarS->rowCount();
						?>
                            
				        <td class="unit">
				        	<?php
				        	if ($TotalSalida > 0) {
				        	?>
				        	   <p class="text-success"><b>SI</b></p>
				        	
				        	<?php }else{ ?>
				        		
				        		<p class="text-danger"><b>NO</b></p>

				        	<?php } ?>				        
                            
					
					</tr>
					<?php endforeach ?>
					

				</tdiv>
			</table>

	












<!-- ------------------------------------------------------- -->

<br><br><br><br>
	<footer>
		<div class="container">
			<div class="thanks">Reporte de asistencias Diarias !</div>
			<div class="notice">
				<div>CONTACTANOS:</div><br>
				<div>Telefono:</div>
				<div><a class="phone" href="https://api.whatsapp.com/send?phone=<?php echo NUMERO_TELEFONO; ?>&text=Hola%20quiero%20realizar%20una%20consulta%20aserca%20de%20las%20asistencias%20">(codigo pais)<?php echo NUMERO_TELEFONO; ?></a>.</div>
				<div class="text-right">Correo:</div>
				<div class="text-right"> <a class="email" href="mailto: <?php echo CORREO_SOPORTE; ?>"> <?php echo CORREO_SOPORTE; ?></a>.</div>
			</div>
			<div class="end">reporte creado por el sistema <b> <?php echo ABREVIATURA_NOMBRE; ?>.</b>  </div>
		</div>
	</footer>

</div>

