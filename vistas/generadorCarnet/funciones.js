  $( "#enviando" ).submit(function( event ) {
  $('.guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
   $.ajax({
      type: "POST",
      url: "generadorCarnet/ver_alumno.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados_ajax").html("Mensaje: Cargando...");
        },
      success: function(datos){
      $("#resultados_ajax").html(datos);
      $('.guardar_datos').attr("disabled", false);
      generarbarcode();

      }
  });
  event.preventDefault();
})


// Funcion para generar el codigo de barras
function generarbarcode()
{
  codigo=$("#idempleado").val();
  JsBarcode("#barcode", codigo);
  //mostrando el codigo de barras

  $("#codinprimir").show();

  codigo1=$("#idempleado").val();
  JsBarcode("#barcode1", codigo1);
  //mostrando el codigo de barras

  $("#codinprimir1").show();  

}

// Funcion para imprimir el codigo de barras
function inprimir()
{
  $("#inprimirCarnet").printArea();
}


//Funcion listar
function listar()
{      /* tbllistado va en la tabla*/
  tabla=$('#tbllistado').dataTable(
  {
      "aProcessing": true,//Activamos el procesamiento del datatables
      "aServerSide": true,//Paginacion y filtrado realizados por el servidor
      dom: 'Bfrtip',//Definimos los elementos del control de tabla 

      buttons: [
                  'copyHtml5',
                  'excelHtml5',
                  'csvHtml5',
                  'pdf'
            ],
            "ajax":
                    {

                         url: '../ajax/simpleList/ajaxEmpleado.php?op=listar',
                         type : "get",
                         dataType : "json",
                         error: function(e){
                          console.log(e.responseText);
                         } 

                     },
              "bDestroy": true,
              "iDisplayLength": 8,//paginacion 
              "order": [[2, "asc"]],//Ordenar desc=desendente asc=ascendente (columna,orden) 
              "autoWidth": false,
              "responsive": true      


  }).dataTable();
}

listar();

