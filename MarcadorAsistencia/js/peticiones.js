 // <!-- para la entrada  -->

$( "#enviandoEntrada" ).submit(function( event ) {
  $('.guardar_datosEntrada').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "ajax/guardar_asistencia.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#inprimir_datosEntrada").html("Mensaje: Cargando...");
        },
      success: function(datos){
      $("#inprimir_datosEntrada").html(datos);
      $('.guardar_datosEntrada').attr("disabled", false);

      }
  });
  event.preventDefault();
})





// <!-- para la salida  -->

  $( "#enviandoSalida" ).submit(function( event ) {
  $('.guardar_datosSalida').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "ajax/guardar_Salida.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#inprimir_datosSalida").html("Mensaje: Cargando...");
        },
      success: function(datos){
      $("#inprimir_datosSalida").html(datos);
      $('.guardar_datosSalida').attr("disabled", false);

      }
  });
  event.preventDefault();
})
