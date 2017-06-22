<?php  
session_start();
require 'conexion.php';
$usuario = $_POST['usuariolg'];
$email = $_POST['correolg'];
$usuarios = $mysqli->query('SELECT email FROM usuarios WHERE email = \''.$email.'\' OR Usuario = \''.$usuario.'\'');
	
	if($usuarios->num_rows == 1):
		echo json_encode(array('error' => true));
		
	else:
		//$datos = $usuarios->fetch_assoc();
		echo json_encode(array('error'=> false)); //, 'tipo' => $datos));
		//$_SESSION['usuariolg'] = $datos['nombre'];
	endif;
	/*if ($usuarios->num_rows == 1) {
			$datos = $usuarios->fetch_assoc();
		echo json_encode(array('error'=> false, 'tipo' => $datos['Tipo_usuario']));
	} else {
		echo json_encode(array('error' => true));
	}*/
			
$mysqli->close();	
?>