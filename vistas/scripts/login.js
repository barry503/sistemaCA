$("#frmAcceso").on('submit', function(e)
{
 
   //No se activara la accion predeterminada del evento
   e.preventDefault();
  logina=$("#logina").val();
  clavea=$("#clavea").val();


$.post("../ajax/editablas/Ajax_Usuario.php?op=verificar",
	{"logina":logina,"clavea":clavea},
	function(data)
	{
			if(data!="null")
		{
			 
			 
			    $(location).attr("href","Dperfil.php?l=s");

		}else {
			
			
		// bootbox.alert("Usuario y/0 Password incorrectos");
		Swal.fire({
                       icon:'error',
                       title:'<h1>Usuario y/o Contraseña incorrectos</h1>',
                       // position: 'top-end',
                       // grow: 'fullscreen',
                       width: '600px',
                       height: '600px',
                       // toast: true,
                       timer: 10000,
                         timerProgressBar: true,
                       showConfirmButton: true,
                       showCancelButton: false,
                       showCloseButton: true,                       
                       footer: 'Si no tienes una cuenta crea una <p style="color:#fff;">_</p><a href="#" data-target="#signup-box" class="user-signup-link "> Aqui </a> ',
                       html: '<br> revisa los datos y vuelve a intentar.',
                   });
			 	// Swal.fire({ title: "Usuario y/0 Password incorrectos" });
			
		}
       
	});

})