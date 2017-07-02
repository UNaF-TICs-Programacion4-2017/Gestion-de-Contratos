<?php  
	$mysqli = new mysqli('localhost','root','','db_gestion_contratos');
	if ($mysqli->connect_error){ 
		echo "Error al conectarse con MySQL debido al error ".$mysqli->connect_errno;
	};
?>
