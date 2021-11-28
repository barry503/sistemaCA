// cada un segundo recargar la funcion de la hora
setInterval(function () { /*funcion de la hora*/ horaphp(); }, 1000);

function horaphp(){
 $.post('includes/horaphp.php',function (respuestaHora)  {
    // console.log(respuestaHora);
    $('.horaphp').html(respuestaHora);
   }); }

/*ejecuto la funcion */horaphp();
