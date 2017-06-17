<?php  
session_start();
require 'conexion.php';
$user = $_POST['usuariolg'];
$pass = $_POST['passlg'];
$usuarios = $mysqli->query('SELECT nombre, tipo_usuario FROM usuarios WHERE usuario = \''.$user.'\' AND password = \''.$pass.'\'');
	
	if($usuarios->num_rows == 1):
		$datos = $usuarios->fetch_assoc();
		echo json_encode(array('error'=> false, 'tipo' => $datos));
		$_SESSION['usuariolg'] = $datos['nombre'];
	else:
		echo json_encode(array('error' => true));
	endif;
	/*if ($usuarios->num_rows == 1) {
			$datos = $usuarios->fetch_assoc();
		echo json_encode(array('error'=> false, 'tipo' => $datos['Tipo_usuario']));
	} else {
		echo json_encode(array('error' => true));
	}*/
			
$mysqli->close();	
?>