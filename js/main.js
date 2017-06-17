jQuery(document).on('submit','#formlg', function(event){
	event.preventDefault();

	jQuery.ajax({
		url:'Main_app/login.php',
		type: 'POST',
		datatype: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonlg').val('Validando...');
		}
		
	})
	.done(function(respuesta){
		console.log(!respuesta.error && !respuesta.tipo);
		var objRespuesta = jQuery.parseJSON(respuesta);
		if (!objRespuesta.error && objRespuesta.tipo.tipo_usuario){
			console.log(objRespuesta.tipo.tipo_usuario);
			if (objRespuesta.tipo.tipo_usuario == "Admin"){
				window.location = 'Main_app/Admin/';
				//$(location).attr('href','Main_app/Admin/');
				//$(location).attr('href','http://www.google.com.ar');
				//location.href = 'Main_app/Admin/';
			}else if(objRespuesta.tipo.tipo_usuario == "User"){
				$(location).attr('href','Main_app/Usuario/');
				//location.href = 'Main_app/Usuario/';
			}	
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},3000);
			$('.botonlg').val('Iniciar Sesión');
		}
	})
	
});