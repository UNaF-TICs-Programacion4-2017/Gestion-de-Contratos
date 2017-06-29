jQuery(document).on('submit','#formreg', function(event){
	event.preventDefault();

	jQuery.ajax({
		url:'Main_app/registrovalidar.php',
		type: 'POST',
		datatype: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('#botonreg').val('Validando...');
		}
		
	})
	.done(function(respuesta){
		console.log(!respuesta.error)// && !respuesta.tipo);
		var objRespuesta = jQuery.parseJSON(respuesta);
		if (!objRespuesta.error){ 
			//window.location = 'Main_app/crearuser.php';
			$(location).attr('href','Main_app/inseryconfirm.php');
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.errorreg').slideUp('slow');
			},3000);
			$('#botonreg').val('Iniciar Sesión');
		}
	})
	
});