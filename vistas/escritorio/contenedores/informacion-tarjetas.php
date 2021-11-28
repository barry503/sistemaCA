   <!-- las consultas de las tarjetas -->
   <?php include "escritorio/contenedores/informacion-tarjetas/consultas-tarjetas.php"; ?>

   <!-- contenedores de las tarjetas de colores acua verde amarillo y rojo -->

        <div class="row">


          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 style="font-size: 40px"><?php echo $cargos; ?><sup style="font-size: 27px"><i class="far fa-dot-circle nav-icon"></i></sup></h3>

                <p>Total de  cargos disponibles</p> <br>
              </div>
              <div class="icon">
                <i class="fa fa-building-o"></i>
              </div>
              <a href="#.php" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


     

 <div class="col-lg-6 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 style="font-size: 40px"><?php echo $todosA; ?><sup style="font-size: 30px"><i class="fas fa-users "></i></sup></h3>

                <p>Poblacion Empleados</p>
                <br>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#.php" class="small-box-footer">
                Mas info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>


  


          <!-- ./col -->
          <!-- small box -->
<!--           <div class="col-lg-4 col-6 ">
            
            <div class="small-box bg-orange ">
              <div class="inner">
                <h3></h3>
                 <h3 style="font-size: 40px"><?php echo $materias; ?> <sup style="font-size: 30px"><i class="nav-icon fas  fa-bar-chart-o"></i></sup></h3>

                <p> Total de asignaturas</p>
                <br>
              </div>
               <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <a href="#.php" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->



         <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>
                 <h3 style="font-size: 40px"><?php echo $asistencia; ?> <sup style="font-size: 30px"><i class="nav-icon fas fa-edit"></i></sup></h3>

                <p> Total de Asistencias</p>
                <br>
              </div>
               <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="#.php" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

                   <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3></h3>
                 <h3 style="font-size: 40px"><?php echo $salidas; ?> <sup style="font-size: 30px"><i class="nav-icon fas fa-edit"></i></sup></h3>

                <p> Total de salidas</p>
                <br>
              </div>
               <div class="icon">
                <i class="fas  fa-male"></i>
              </div>
              <a href="#.php" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>







          <!-- ./col -->
<div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <!-- Loading (remove the following to stop the loading)-->
              <div class="overlay dark">
                <i class="fas fa-3x fa-sync-alt"></i>
              </div>
              <!-- end loading -->
              <div class="inner">
                <h3 style="font-size: 38px">5<sup style="font-size: 20px">%</sup><?php //echo $noasistencia; ?><sup style="font-size: 25px"><i class="nav-icon fas fa-table"></i></sup></h3>
                

                <p>Empleados sin registro de Asistencias</p><br>
              </div>
              <div class="icon">
                <i class="fas fa-archive"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          
          <!-- ./col -->
        </div>


        
        
        <!-- /.row -->