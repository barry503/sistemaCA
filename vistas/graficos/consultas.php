<?php  /* Connexion a la base de datos y las varibles del nombre de la institucion y etc...*/ 
include '../config/conexionPDOcontacto.php'; ?>



    <!-- INICIO DE LAS CONSULTAS PARA GRAFICOS DE DONA Y PASTEL	 -->
   <?php 

// primero

 $sql1 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE idcargo=1")->fetchAll(PDO::  FETCH_OBJ);
 foreach ($sql1  as $k) {
 $cargo1 = $k->cargo;
 }
 

// segundo

 $sql2 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE idcargo=2")->fetchAll(PDO::  FETCH_OBJ);
 foreach ($sql2  as $k) {
 $cargo2 = $k->cargo;
 }
 
 // tercer0

 $sql3 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE idcargo=3")->fetchAll(PDO::  FETCH_OBJ);
 foreach ($sql3  as $k) {
 $cargo3 = $k->cargo;
 }
 
 // cuarto

 $sql4 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE idcargo=4")->fetchAll(PDO::  FETCH_OBJ);
 foreach ($sql4  as $k) {
 $cargo4 = $k->cargo;
 }
 




       ?>
       <!-- FIN DE LAS CONSULTAS PARA GRAFICOS DE DONA Y PASTEL	 -->


 <!-- INICIO DE LAS CONSULTAS PARA DEMAS GRAFICOS 	 -->
<?php 


$Hsexo='1';//Hombre
$Msexo='2';//Mujer

$ano= date('Y');
// enero
$Imes1= $ano.'-01-01';# 00:00:10
$Fmes1= $ano.'-01-30';# 00:00:44

//febrero
$Imes2= $ano.'-02-01';# 00:00:10
$Fmes2= $ano.'-02-30';# 00:00:44

//marzo
$Imes3= $ano.'-03-01';# 00:00:10
$Fmes3= $ano.'-03-30';# 00:00:44

//abril
$Imes4= $ano.'-04-01';# 00:00:10
$Fmes4= $ano.'-04-30';# 00:00:44

//mayo
$Imes5= $ano.'-05-01';# 00:00:10
$Fmes5= $ano.'-05-30';# 00:00:44

//junio
$Imes6= $ano.'-06-01';# 00:00:10
$Fmes6= $ano.'-06-30';# 00:00:44

//julio
$Imes7= $ano.'-07-01';# 00:00:10
$Fmes7= $ano.'-07-30';# 00:00:44

//agosto
$Imes8= $ano.'-08-01';# 00:00:10
$Fmes8= $ano.'-08-30';# 00:00:44

//septiembre
$Imes9= $ano.'-09-01';# 00:00:10
$Fmes9= $ano.'-09-30';# 00:00:44

//octubre
$Imes10= $ano.'-10-01';# 00:00:10
$Fmes10= $ano.'-10-30';# 00:00:44

//noviembre
$Imes11= $ano.'-11-01';# 00:00:10
$Fmes11= $ano.'-11-30';# 00:00:44

//diciembre
$Imes12= $ano.'-12-01';# 00:00:10
$Fmes12= $ano.'-12-30';# 00:00:44




// enero para niños
 $sql1h = $base->query("SELECT COUNT(a.idempleado) as enero1, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes1' AND a.fecha <= '$Fmes1' AND U.idsexo = '$Hsexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1h as $k) {
 	$enero1 = $k->enero1;
 }


// enero para niñas
 $sql1m = $base->query("SELECT COUNT(a.idempleado) as enero2, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes1' AND a.fecha <= '$Fmes1' AND U.idsexo = '$Msexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1m as $k) {
 	$enero2 = $k->enero2;
 }




// febrero para niños
 $sql1h = $base->query("SELECT COUNT(a.idempleado) as febrero1, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes2' AND a.fecha <= '$Fmes2' AND U.idsexo = '$Hsexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1h as $k) {
 	$febrero1 = $k->febrero1;
 }


// febrero para niñas
 $sql1m = $base->query("SELECT COUNT(a.idempleado) as febrero2, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes2' AND a.fecha <= '$Fmes2' AND U.idsexo = '$Msexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1m as $k) {
 	$febrero2 = $k->febrero2;
 }




// marzo para niños
 $sql1h = $base->query("SELECT COUNT(a.idempleado) as marzo1, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes3' AND a.fecha <= '$Fmes3' AND U.idsexo = '$Hsexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1h as $k) {
 	$marzo1 = $k->marzo1;
 }


// marzo para niñas
 $sql1m = $base->query("SELECT COUNT(a.idempleado) as marzo2, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes3' AND a.fecha <= '$Fmes3' AND U.idsexo = '$Msexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1m as $k) {
 	$marzo2 = $k->marzo2;
 }





// abril para niños
 $sql1h = $base->query("SELECT COUNT(a.idempleado) as abril1, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes4' AND a.fecha <= '$Fmes4' AND U.idsexo = '$Hsexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1h as $k) {
 	$abril1 = $k->abril1;
 }


// abril para niñas
 $sql1m = $base->query("SELECT COUNT(a.idempleado) as abril2, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes4' AND a.fecha <= '$Fmes4' AND U.idsexo = '$Msexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1m as $k) {
 	$abril2 = $k->abril2;
 }


// mayo para niños
 $sql1h = $base->query("SELECT COUNT(a.idempleado) as mayo1, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes5' AND a.fecha <= '$Fmes5' AND U.idsexo = '$Hsexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1h as $k) {
 	$mayo1 = $k->mayo1;
 }


// mayo para niñas
 $sql1m = $base->query("SELECT COUNT(a.idempleado) as mayo2, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes5' AND a.fecha <= '$Fmes5' AND U.idsexo = '$Msexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1m as $k) {
 	$mayo2 = $k->mayo2;
 }





// junio para niños
 $sql1h = $base->query("SELECT COUNT(a.idempleado) as junio1, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes6' AND a.fecha <= '$Fmes6' AND U.idsexo = '$Hsexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1h as $k) {
 	$junio1 = $k->junio1;
 }


// junio para niñas
 $sql1m = $base->query("SELECT COUNT(a.idempleado) as junio2, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes6' AND a.fecha <= '$Fmes6' AND U.idsexo = '$Msexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1m as $k) {
 	$junio2 = $k->junio2;
 }






// julio para niños
 $sql1h = $base->query("SELECT COUNT(a.idempleado) as julio1, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes7' AND a.fecha <= '$Fmes7' AND U.idsexo = '$Hsexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1h as $k) {
 	$julio1 = $k->julio1;
 }


// julio para niñas
 $sql1m = $base->query("SELECT COUNT(a.idempleado) as julio2, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes7' AND a.fecha <= '$Fmes7' AND U.idsexo = '$Msexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1m as $k) {
 	$julio2 = $k->julio2;
 }





// agosto para niños
 $sql1h = $base->query("SELECT COUNT(a.idempleado) as agosto1, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes8' AND a.fecha <= '$Fmes8' AND U.idsexo = '$Hsexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1h as $k) {
 	$agosto1 = $k->agosto1;
 }


// agosto para niñas
 $sql1m = $base->query("SELECT COUNT(a.idempleado) as agosto2, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes8' AND a.fecha <= '$Fmes8' AND U.idsexo = '$Msexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1m as $k) {
 	$agosto2 = $k->agosto2;
 }





// septiembre para niños
 $sql1h = $base->query("SELECT COUNT(a.idempleado) as septiembre1, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes9' AND a.fecha <= '$Fmes9' AND U.idsexo = '$Hsexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1h as $k) {
 	$septiembre1 = $k->septiembre1;
 }


// septiembre para niñas
 $sql1m = $base->query("SELECT COUNT(a.idempleado) as septiembre2, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes9' AND a.fecha <= '$Fmes9' AND U.idsexo = '$Msexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1m as $k) {
 	$septiembre2 = $k->septiembre2;
 }





// octubre para niños
 $sql1h = $base->query("SELECT COUNT(a.idempleado) as octubre1, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes10' AND a.fecha <= '$Fmes10' AND U.idsexo = '$Hsexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1h as $k) {
 	$octubre1 = $k->octubre1;
 }


// octubre para niñas
 $sql1m = $base->query("SELECT COUNT(a.idempleado) as octubre2, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes10' AND a.fecha <= '$Fmes10' AND U.idsexo = '$Msexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1m as $k) {
 	$octubre2 = $k->octubre2;
 }






 // noviembre para niños
 $sql1h = $base->query("SELECT COUNT(a.idempleado) as noviembre1, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes11' AND a.fecha <= '$Fmes11' AND U.idsexo = '$Hsexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach($sql1h as $k) {
 	$noviembre1 = $k->noviembre1;
 }


// noviembre para niñas
 $sql1m = $base->query("SELECT COUNT(a.idempleado) as noviembre2, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes11' AND a.fecha <= '$Fmes11' AND U.idsexo = '$Msexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1m as $k) {
 	$noviembre2 = $k->noviembre2;
 }





// diciembre para niños
 $sql1h = $base->query("SELECT COUNT(a.idempleado) as diciembre1, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes12' AND a.fecha <= '$Fmes12' AND U.idsexo = '$Hsexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1h as $k) {
 	$diciembre1 = $k->diciembre1;
 }


// diciembre para niñas
 $sql1m = $base->query("SELECT COUNT(a.idempleado) as diciembre2, u.idempleado, u.nombre, u.apellido, a.fecha FROM asistencia AS a INNER JOIN empleado AS U ON a.idempleado=u.idempleado WHERE a.fecha >= '$Imes12' AND a.fecha <= '$Fmes12' AND U.idsexo = '$Msexo' ")->fetchAll(PDO::  FETCH_OBJ);
 
 foreach ($sql1m as $k) {
 	$diciembre2 = $k->diciembre2;
 }


 ?>
















 <!-- FIN DE LAS CONSULTAS PARA DEMAS GRAFICOS 	 -->
