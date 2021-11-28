<?php  /* Connexion a la base de datos y las varibles del nombre de la institucion y etc...*/ 
include '../config/conexionPDOcontacto.php'; ?>
<?php // INICIO DE TODAS LAS CONSULTAS DE LAS TARJETAS DE COLORES 

      #TARJETA AZUL

   #codigo para contar los cargos      
    $contarcargos = $base->query("SELECT COUNT(*) as cargos FROM cargo ")->fetchAll(PDO::  FETCH_OBJ);
     foreach ($contarcargos  as $c) {/*ejecutando...*/$cargos = $c->cargos;}
      #TARJETA VERDE

   # codigo para contar todos los empleado
    $a = $base->query("SELECT COUNT(*) as todosA FROM empleado ")->fetchAll(PDO:: FETCH_OBJ);
     foreach ($a as $c) { /*ejecutando...*/ $todosA = $c->todosA;}
      #TARJETA ANARANJADA




   # codigo para contar  las asistencias
       $asistencia_alumno=$base->query("SELECT COUNT(*) AS asistencia FROM empleado as a INNER JOIN asistencia as s WHERE a.idempleado = s.idempleado")->fetchAll(PDO:: FETCH_OBJ);
        foreach($asistencia_alumno as $c){/*ejecutando...*/$asistencia =$c->asistencia;}
      #TARJETA ROJA

   # codigo para contar las salidas
       $salidas_alumno = $base->query("SELECT COUNT(*) AS salidas FROM empleado as a INNER JOIN salida as s WHERE a.idempleado = s.idempleado")->fetchAll(PDO:: FETCH_OBJ);
     foreach($salidas_alumno as $c){/*ejecutando...*/$salidas= $c->salidas;}


// FIN DE TODAS LAS CONSULTAS DE LAS TARJETAS DE COLORES ?>