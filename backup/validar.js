jQuery(document).on('submit','#formlg', function(event){
	event.preventDefault();

	jQuery.ajax({
	//$.ajax({	
		url:'Main_app/registrovalidar.php',
		type: 'POST',
		datatype: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('#botonlg').val('Validando...');
		}
		
	})
	.done(function(respuesta){
		console.log(!respuesta.error)// && !respuesta.tipo);
		//var objRespuesta = jQuery.parseJSON(respuesta);
		var objRespuesta = jQuery.parseJSON(respuesta);
		//alert(objRespuesta);
		//console.log(objRespuesta);
		console.log(respuesta);
		if (!objRespuesta.error){ 
			//window.location = 'Main_app/crearuser.php';
			//alert(objRespuesta);
			//$(location).attr('href','Main_app/crearuser.php');
			var nombre = $("#nombrelg").val();
			var correo = $("#correolg").val();
			var usuario = $("#usuariolg").val();
			var pass = $("#passlg").val();

			$.ajax({
				url:"Main_app/mostrar.php",
				data:{
					nombre:nombre,
					correo:correo,
					usuario:usuario,
					pass:pass
				},
				type:"POST"
				});

		}else{
			alert(objRespuesta);
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},3000);
			$('#botonlg').val('Iniciar Sesión');
		}
	})
	
});