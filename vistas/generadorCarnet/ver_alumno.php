<?php  /* Connexion a la base de datos y las varibles del nombre de la institucion y etc...*/ 
$N1 = 2;
include '../../config/urlConexion.php'; ?>

<!-- respetar espacios saltos de lineas e incluso los comentarios podrian dar margen de error
 -->
<?php

	/*Inicia validacion del lado del servidor*/


	// si existe la variable idempleado 
	if (empty($_POST['idempleado'])) {
           $errors[] = "idempleado esta vacío";
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
							}
						?>
			</div>

		<?php } ?>

	
				<!-- <div > -->
					<!-- aqui contenedor de la consulta -->
					
           <!-- aqui la conexion -->
<?php 
// si existe un envio traeme la informacion y inprimela con el mensaje de confirmacion
$idempleado= $_POST['idempleado'];

  $query_datos=$base->query("SELECT a.idempleado, a.foto, a.nombre, a.apellido,a.idcargo,g.idcargo,g.nombre_cargo  FROM empleado a INNER JOIN cargo g ON a.idcargo=g.idcargo AND a.idempleado='$idempleado'")->fetchAll(PDO::  FETCH_OBJ);
  foreach ($query_datos as $d):
  ?>
<!-- inicio card -->
<div class="card">
  <!-- / inicio card-header -->
  <div class="card-header">
    <!--  inicio card-title -->
    <h3 class="card-title">
      <button type="button" class="btn btn-tool" data-card-widget="maximize">
      <i class="fas  fa-picture-o mr-1" style="font-size:30px;">
      </i>
        </button>
    </h3>
    <!-- / inicio card-title -->
    <div class="card-tools">
      <ul class="nav nav-pills ml-auto">
        <li class="nav-item">
          <button type="button" class="btn btn-tool" data-card-widget="maximize">
            <i class="fas fa-expand">
            </i>
          </button>
        </li>
      </ul>
    </div>
  </div>
  <!-- / fin card-header -->
<div class="card-body">
  <!-- inicio div para imprimir idempleado -->
  <div id="inprimiridempleadoNo"  class=""><!-- bg-navy -->

 <div class="row mb-2 text-center">
    <!-- INICIO DEL LADO 1 DEL idempleado -->
    <div class="col-xs-12 col-md-12 col-lg" >
    <!-- inicio card -->
    <div  class="card  card-orange" style="  border-radius: 10px; border: 2px solid #fd7e14;">
      <div class="text-center py-1">
        <i style="font-size: 40px;" class="text-orange fas fa-circle">.
        </i>
      </div>
      <!-- inicio card-header -->
      <div class="card-header">
        <h5 class="text-center">
          <span class=" text-center"><!-- text-dark --> <h3><?php echo NOMBRE_SISTEMA; ?></h3>
          </span>
        </h5>
      </div>
      <!--/ fin card-header -->
      <div class="card-body">
        <div class="text-center ">
          <!-- foto del empleado -->
          <img width="120px" height="130px"  src="../files/empleado/<?php echo $d->foto; ?>"  alt="sin foto">
        </div>
        <!-- INICIO COLUMNAS PARA EL NOMBRE Y EL APELLIDO -->
        <div class="row mb-2 text-center">
          
          <div class="col-md-4 text-muted" style="background:#f8f9fa;">
            NOMBRES<!-- texto plano -->
            :
          </div>
          <div class="col-md-8 text-muted">
            <div class="text-dark">
              <?php echo $d->nombre; 
              ?>
            </div>
          </div>
          <div class="col-md-4 text-muted" style="background:#f8f9fa;">
            APELLIDOS<!-- texto plano -->
            :
          </div>
          <div class="col-md-8 text-muted">
            <div class="text-dark">
              <?php echo $d->apellido; 
              ?>
            </div>
          </div>                    
        </div>
        <!-- / FIN COLUMNAS PARA EL NOMBRE Y EL APELLIDO -->
        <!-- inicio contenedor del codigo de barra -->
        <div class="text-center">
          <div id="codinprimir">
            <img id="barcode">
              <!-- 
              aqui va el codigo de barra 
              -->
            <!-- </img> -->
          </div>
        </div>
        <!-- / fin contenedor del codigo de barra -->
        <div class="text-center">
          <!-- foto de la institucion -->
          <img  width="100px" height="100px" class="img-circle" src="../files/img/<?php echo IMAGEN_SISTEMA; ?>">
          <div class="text-dark"><?php echo ABREVIATURA_NOMBRE; ?></div>
          <!-- año escolar -->
          <div class="text-dark">
            AÑO: <?php echo date('Y'); ?><br><br><br>
          </div>

        </div>
      </div> 
        <div class="bg-dark text-center card-footer mb-2"><h3><?php echo $d->nombre_cargo; ?></h3></div>
  </div>
  <!-- / fin card -->
    </div>
    <!-- / FIN  DEL LADO 1 DEL idempleado -->
       <!-- <div class="col-md-4"></div>NADA --><br><br>
    <!-- INICIO DEL LADO 2 DEL idempleado -->
    <div class="col-xs-12 col-md-12 col-lg">
    <!-- inicio card -->
    <div  class="card  card-orange" style="  border-radius: 10px; border: 2px solid grey;">
      <div class="text-center py-1">
        <i style="font-size: 40px;" class="text-orange fas fa-circle">.
        </i>
      </div>
      <div class="py-3"></div>
      <!-- inicio card-header -->
      <div class="card-header bg-light" style="border-radius: 10px; border: 1px solid grey;">
        <h5 class="text-center ">
          <span class="text-dark text-center">
            CARNET DE IDENTIFICACION DE EMPLEADO . 
          </span>
        </h5>
      </div>
      <div class="py-2"></div>
      <!--/ fin card-header -->
      <div class="card-body">
        <div class="text-center text-dark" style="font-size: 30px;"><?php echo ABREVIATURA_NOMBRE; ?></div>
        <div class="py-2"></div>

        <div class="text-center mt-5  text-dark" style="font-size: 30px;">
          F
          :________________
        </div>
        <div class="text">
          <span class="text-dark py-5">NOMBRE DEL GERENTE O DUENO DE LA EMPRESA:<br><?php echo PROPIETARIO; ?></span>
        </div>
        <div class="py-2"></div>
        <div class="text-center text-dark py-3">
          CORREO DE LA EMPRESA:<br><?php echo CORREO_SOPORTE; ?><br>
          
          TELEFONO DE LA EMPRESA:<br><?php echo NUMERO_TELEFONO; ?>
        </div>
        <div class="py-4"></div>
        <div class="text-center text-dark">
          <i class="fa fa-map" style="font-size: 40px;"></i><br>
          DIRECCION DE LA EMPRESA:<br><?php echo DIRECCION_EMPRESA; ?>
        </div>        
        <!-- <div class="py-4"></div> -->
      </div> 
        <div class="text-dark text-center py-3 card-footer mb-2">Fecha de vencimiento: 31/12/<?php echo date("Y"); ?>
          <!-- <br><br><br> -->
        </div>

  </div>
  <!-- / fin card -->
    </div>
    <!-- / FIN  DEL LADO 2 DEL idempleado -->    
 </div>    
</div>
<!-- / fin div para imprimir idempleado -->
</div>
<!-- / fin card -->  

<?php endforeach ?>

<!-- <div id="inprimiridempleado">
<table  style="border: 5px solid #fd7e14; font-size: 30px; " class="text-center">
<tr  class=" bg-navy">
  <td colspan="2" width="800px"  height="150px" ><h3 class="text-center"><i style="font-size: 50px; color: #fff;/*#fd7e14*/ " class=" fas fa-circle"></i></h3></td>
</tr>
  <tr >
    <td colspan="2" class="text-dark" width="800px" height="125px">COMPLEJO EDUCATIVO <?php echo $NombreIns; ?></td>
  </tr>

 

    <tr>
    <td width="800px" height="400px" >
      <img  width="330px" height="350px" src="../files/imgInstitucion/<?php echo $imgInstitucion; ?>"></td>
    <td width="800px" height="400px" >
      <img width="340px" height="350px"  src="../files/empleado/<?php echo $d->foto; ?>"  alt="sin fotografia"></td>

  </tr>
  <tr >
    <td colspan="2" class="text-white" width="800px" height="125px">______</td>
  </tr>

  <tr>
    <td height="80px" style="background:#f8f9fa;" ><h3>NOMBRES:</h3></td>
    <td height="80px" class="text-dark"  ><h3><?php echo $d->nombre; ?></h3></td>

  </tr>
  <tr>
    <td height="80px" style="background:#f8f9fa;" ><h3>APELLIDOS:</h3></td>
    <td height="80px" class="text-dark" ><h3><?php echo $d->apellido; ?></h3></td>

  </tr>
  <tr >
    <td colspan="2" class="text-white" width="800px" height="70px">______</td>
  </tr>   

  <tr>
  <td colspan="2"  width="800px" height="220px" >
             <div id="codinprimir1">
             <img style="/*anchura*/width: 400px; 
                   /*altura*/height: 200px;" id="barcode1">
           </div>
  </td>
</tr>  
  <tr>
  <td colspan="2" width="800px" height="50px"  ><h3 class="text-dark">AÑO ESCOLAR:<?php echo $año;?><br><?php echo $AInstitucion; ?></h3></td>
</tr>  
  <tr>
  <td colspan="2"  width="800px" height="150px" style="background:#fd7e14;"><h1 class="text-white"><?php echo $d->nombre_cargo; ?></h1></td>
</tr>  

</table>
</div>  -->


    
  
    
    

<?php if (!$query_datos): ?>
  <?php $errors[] = 'No se encontro el empleado.' ?>
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Error!</strong>
           <!-- ciclo para los errores o errors -->
          <?php
            foreach ($errors as $error) {
                echo $error;
              }
            ?>
      </div>
<?php endif ?>




    

<!-- ----------------------------------------final vista del idempleado----------------------------------------------- -->





    




  
    	
    	
  
						
			<!-- 	</div> -->
	



