<?php  /* Connexion a la base de datos y las varibles del nombre de la institucion y etc...*/ 
include '../config/conexionPDOcontacto.php'; ?>
<?php 
# CONTANDO LAS NIÑAS 
   $sql_M=$base->query("SELECT COUNT(*) as NA FROM empleado WHERE idsexo='2'")->fetchAll(PDO:: FETCH_OBJ); 
   foreach ($sql_M as $m){/*ejecutando...*/ $NA =$m->NA;}
#FIN CONTANDO LAS NIÑAS

# CONTANDO LOS NIÑOS 
  $sql_H=$base->query("SELECT COUNT(*) as Ni FROM empleado WHERE idsexo='1'")->fetchAll(PDO:: FETCH_OBJ);
  foreach ($sql_H as $h){/*ejecutando...*/ $Ni = $h->Ni;}
#FIN CONTANDO LOS NIÑOS
?>
<?php/*INICIO DE LAS CONSULTAS PARA GRAFICOS DE DONA Y PASTEL*/?>

<!-- -------------------------INICIO------------HOMBRES----------------------------------------- -->
<?php
#primero
 $Hsql1 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE idsexo=2 AND idcargo=1")->fetchAll(PDO:: FETCH_OBJ); 
  foreach ($Hsql1 as $c){ /*ejecutando...*/$Hcargo1 = $c->cargo;}
#segundo
 $Hsql2 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE idsexo=2 AND idcargo=2")->fetchAll(PDO:: FETCH_OBJ);

  foreach ($Hsql2 as $c){ /*ejecutando...*/$Hcargo2 = $c->cargo;} 
#tercer0
 $Hsql3 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE idsexo=2 AND idcargo=3")->fetchAll(PDO:: FETCH_OBJ);

  foreach ($Hsql3 as $c){ /*ejecutando...*/$Hcargo3 = $c->cargo;} 
#cuarto
 $Hsql4 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE idsexo=2 AND idcargo=4")->fetchAll(PDO:: FETCH_OBJ);

  foreach ($Hsql4 as $c){ /*ejecutando...*/$Hcargo4 = $c->cargo;}


?>
<!-- -----------------------------------FIN---HOMBRES----------------------------------------- -->

<!-- -----------------------------INICIO--------MUJERES----------------------------------------- -->
<?php 
#primero
 $Msql1 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE idsexo=2 AND idcargo=1")->fetchAll(PDO:: FETCH_OBJ); 
  foreach ($Msql1 as $c){ /*ejecutando...*/$Mcargo1 = $c->cargo;}
#segundo
 $Msql2 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE idsexo=2 AND idcargo=2")->fetchAll(PDO:: FETCH_OBJ);

  foreach ($Msql2 as $c){ /*ejecutando...*/$Mcargo2 = $c->cargo;} 
#tercer0
 $Msql3 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE idsexo=2 AND idcargo=3")->fetchAll(PDO:: FETCH_OBJ);

  foreach ($Msql3 as $c){ /*ejecutando...*/$Mcargo3 = $c->cargo;} 
#cuarto
 $Msql4 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE idsexo=2 AND idcargo=4")->fetchAll(PDO:: FETCH_OBJ);

  foreach ($Msql4 as $c){ /*ejecutando...*/$Mcargo4 = $c->cargo;}

?>








<?php/* FIN DE LAS CONSULTAS PARA GRAFICOS DE DONA Y PASTEL*/?>
<!-- ------------------------------------FIN--MUJERES----------------------------------------- -->


<!-- -------------------------para grafico azul -------------------------------------------- -->
<?php
#primero
 $sql1 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE  idcargo=1")->fetchAll(PDO:: FETCH_OBJ); 
  foreach ($sql1 as $c){ /*ejecutando...*/$cargo1 = $c->cargo;}
#segundo
 $sql2 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE  idcargo=2")->fetchAll(PDO:: FETCH_OBJ);

  foreach ($sql2 as $c){ /*ejecutando...*/$cargo2 = $c->cargo;} 
#tercer0
 $sql3 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE  idcargo=3")->fetchAll(PDO:: FETCH_OBJ);

  foreach ($sql3 as $c){ /*ejecutando...*/$cargo3 = $c->cargo;} 
#cuarto
 $sql4 = $base->query("SELECT COUNT(*) as cargo FROM empleado WHERE  idcargo=4")->fetchAll(PDO:: FETCH_OBJ);

  foreach ($sql4 as $c){ /*ejecutando...*/$cargo4 = $c->cargo;}


?>
<!-- ------------------fin----para grafico azul -------------------------------------------- -->