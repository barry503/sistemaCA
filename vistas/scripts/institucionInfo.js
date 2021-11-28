function Cargando_datos() {
 //Cargamos los datos de la institucion

 /*Mision de la institucion*/
$.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=13",
    function(r){ $(".MISION").html(r);    });
 /*Vision de la institucion*/
$.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=14",
    function(r){ $(".VISION").html(r);    });



 /*Logo de la institucion*/
  $.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=3",
    function(r){    $('.LOGO-ONUVA').attr('src','sistema_notas/files/imgInstitucion/'+r);  });
 /*ABREVIATURA de la institucion*/
  $.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=1",
    function(r){ $(".ABREVIATURA-ONUVA").html(r);    });
 /*NOMBRE de la institucion*/
$.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=4",
    function(r){ $(".NOMBRE-ONUVA").html(r);    });
 /*Logo de la institucion*/
  $.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=2",
    function(r){ $(".DIRECTOR-ONUVA").html(r);    });
 /*DIRECTOR de la institucion*/
$.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=15",
    function(r){ $(".SUB-DIRECTOR-ONUVA").html(r);    });
 /*ENCARGADOS de la institucion*/
$.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=16",
    function(r){ $(".ENCARGADOS-ONUVA").html(r);    });
 /*RESEÑA de la institucion*/
$.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=18",
    function(r){ $(".RESEÑA-HISTORICA").html(r);    });
/*Imagen de la reseña*/
$.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=19",
    function(r){ $(".IMG-RESEÑA").attr('src','ONUVA/img/'+r);    });


 /*Ubicacion geografica de la institucion*/
$.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=17",
    function(r){ $(".UBICACION-GEOGRAFICA").html(r);    });

/*Redes Sociales*/ 
$.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=10",
  function (r) { $(".twitter").attr('href',r); });
$.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=9",
  function (r) { $(".facebook").attr('href',r);});
$.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=6",
  function (r) { $(".envelope").attr('href','mailto:'+r);});
$.post("sistema_notas/ajax/vistablas/onuvaInfo.php?op=mostrar&id=8",
  function (r) { $(".whatsapp").attr('href','https://api.whatsapp.com/send?phone=503'+r+'&text=Hola%20quiero%20realizar%20una%20consulta%20aserca%20%20del%20complejo%20educativo%20catolico%20nuestra%20señora%20de%20las%20gracias'); });

}





Cargando_datos();