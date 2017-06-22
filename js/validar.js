jQuery(document).on('submit','#formlg', function(event){
	event.preventDefault();

	jQuery.ajax({
		url:'Main_app/registrovalidar.php',
		type: 'POST',
		datatype: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonlg').val('Validando...');
		}
		
	})
	.done(function(respuesta){
		console.log(!respuesta.error)// && !respuesta.tipo);
		var objRespuesta = jQuery.parseJSON(respuesta);
		if (!objRespuesta.error){ 
			window.location = 'Main_app/resultado.php/';
		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},3000);
			$('.botonlg').val('Iniciar Sesión');
		}
	})
	
});