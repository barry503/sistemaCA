//Funcion que se ejecuta al inicio
 function inicial(){

 //Cargamos los items al select de cargo
  $.post("../ajax/vistablas/Ajax_vistaAsistencia.php?op=selectCargo", function(r){
             $("#cargoD").html(r);
             $("#cargoD").selectpicker('refresh');
  });

 //Cargamos los items al select de cargo
  $.post("../ajax/vistablas/Ajax_vistaAsistencia.php?op=selectCargo", function(r){
             $("#cargoR").html(r);
             $("#cargoR").selectpicker('refresh');
  });

 //Cargamos los items al select de cargo
  $.post("../ajax/vistablas/Ajax_vistaAsistencia.php?op=selectCargo", function(r){
             $("#cargoM").html(r);
             $("#cargoM").selectpicker('refresh');
  });

//Cargamos los items al select de cargo
  $.post("../ajax/vistablas/Ajax_vistaAsistencia.php?op=selectMes", function(r){
             $("#mes").html(r);
             $("#mes").selectpicker('refresh');
  });

 }


// CONSULTAS PARA Asistencias Diaria
  $( "#Adiaria" ).submit(function( event ) {
  $('.Consut3').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "../ajax/vistablas/Ajax_vistaAsistencia.php?op=diaria",
      data: parametros,
       beforeSend: function(objeto){
        $("#RespuestaAdiaria").html("Mensaje: Cargando reporte...");
        },
      success: function(datos){
      $("#RespuestaAdiaria").html(datos);
      $('.Consut3').attr("disabled", false);
     // inprimir();

      }
  });
  event.preventDefault();
})


// CONSULTAS PARA Asistencias con rango de fecha
  $( "#Arango" ).submit(function( event ) {
  $('.Consut1').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "../ajax/vistablas/Ajax_vistaAsistencia.php?op=rango",
      data: parametros,
       beforeSend: function(objeto){
        $("#RespuestaArango").html("Mensaje: Cargando reporte...");
        },
      success: function(datos){
      $("#RespuestaArango").html(datos);
      $('.Consut1').attr("disabled", false);
     // inprimir();

      }
  });
  event.preventDefault();
})


// CONSULTAS PARA Asistencias mensuales
  $( "#Amensuales" ).submit(function( event ) {
  $('.Consut2').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "../ajax/vistablas/Ajax_vistaAsistencia.php?op=mensuales",
      data: parametros,
       beforeSend: function(objeto){
        $("#RespuestaAmensuales").html("Mensaje: Cargando reporte...");
        },
      success: function(datos){
      $("#RespuestaAmensuales").html(datos);
      $('.Consut2').attr("disabled", false);
     // inprimir();

      }
  });
  event.preventDefault();
})  



// Funcion para imprimir todos los reportes
function inprimir1()
{
  $("#idTablaprint1").printArea();
}


// Funcion para imprimir todos los reportes
function inprimir2()
{
  $("#idTablaprint2").printArea();
}

// Funcion para imprimir todos los reportes
function inprimir3()
{
  $("#idTablaprint3").printArea();
}



 inicial();