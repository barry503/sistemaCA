<?php
#Utilizo la hora actual en el salvador
$HoraActual = date_default_timezone_set('America/El_Salvador');
# paso el formato pre establecidos dentro de la funcion date()
$HoraActual = date(" g:i:s a");
/*y inprimo con un echo la hora actual en el salvador*/
echo $mostrarHORA= 'Hora:'.$HoraActual;
?>