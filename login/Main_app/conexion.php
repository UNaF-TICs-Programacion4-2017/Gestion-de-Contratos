<?php  
	$mysqli = new mysqli('localhost','root','','login');
	if ($mysqli->connect_error){ 
		echo "Error al conectarse con MySQL debido al error ".$mysqli->connect_errno;
	};
?>
