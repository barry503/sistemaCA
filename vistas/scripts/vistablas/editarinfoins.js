var tabla;


//Funcion que se ejecuta al inicio
 function inicial(){
     mostrarform(false);
     listar();

     $("#formulario").on("submit",function(e)
     {
          guardaryeditar(e);
       
     })
     

 }

//Funcion limpiar
function limpiar()
{
   $("#id").val("");
   $("#nombre").val("");
   $("#descripcion").val("");
   

}



//Funcion mostrar formulario condi=condicion del formulario
function mostrarform(condi)
{
  limpiar();
  if (condi)
  {
     $("#listadoregistros").hide();
     $("#formularioregistros").show();
     $("#btnGuardar").prop("disabled",false);
     $("#btnagregar").hide();
  }
  else 
  {
     $("#listadoregistros").show();
     $("#formularioregistros").hide();
     $("#btnagregar").show();

  }

}







//Funcion cancelarform
function cancelarform()
{
    limpiar();
    mostrarform(false);
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

                         url: "../ajax/vistablas/editInfoIns.php?op=listar",
                         type : "get",
                         dataType : "json",
                         error: function(e){
                          console.log(e.responseText);
                         } 

                     },
              "bDestroy": true,
              "iDisplayLength": 5,//paginacion 
              "order": [[0, "asc"]],//Ordenar desc=desendente asc=ascendente (columna,orden) 
              "autoWidth": false,
              "responsive": true 

  }).dataTable();
}


//Funcion para guardar o editar

function guardaryeditar(e)
{
     e.preventDefault();//No se activara la accion predeterminada del evento
     $("#btnGuardar").prop("disabled",true);
     var formData = new FormData($("#formulario")[0]);

     $.ajax({
         url:"../ajax/vistablas/editInfoIns.php?op=guardaryeditar",
         type: "POST",
         data: formData,
         contentType: false,
         processData: false,

         success: function(datos)
         {
             // alert(datos);
             bootbox.alert(datos);
             // Swal.fire({ icon:'success', title: datos });
             mostrarform(false);
              // tabla.ajax.reload();
              listar();
             //setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
         }         
           
     });
     limpiar();
}





function mostrar(id)
{
   $.post("../ajax/vistablas/editInfoIns.php?op=mostrar",{id : id}, function(data, status)
    {
       data = JSON.parse(data);
       mostrarform(true);

       $("#id").val(data.id);
        $("#nombre").val(data.nombre);
       $("#descripcion").val(data.descripcion);



   })
} 







//Funcion para eliminar registros
function eliminar(id)
{
   
  bootbox.confirm("Esta seguro de eliminar el Campo Institucional ?", function(result) {

      if(result)
      {
       $.post("../ajax/vistablas/editInfoIns.php?op=eliminar", {id : id}, function(e){
         bootbox.alert(e);
         // tabla.ajax.reload();
              listar();
         // setTimeout('document.location.reload()'); //para recargar la pajina web (provicional) 
        
       });  
          }
      }

          );



}


 inicial();