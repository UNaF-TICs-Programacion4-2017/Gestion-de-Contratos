<?php  
session_start();
require 'conexion.php';
$user = $_POST['usuariolg'];
$pass = $_POST['passlg'];

$usuarios = $mysqli->query('SELECT Cod_usuario, NombreUsuario, tipo_usuario FROM usuarios WHERE usuario = \''.$user.'\' AND password = \''.$pass.'\'');
	
	if($usuarios->num_rows == 1):
		$datos = $usuarios->fetch_assoc();
		echo json_encode(array('error'=> false, 'tipo' => $datos));
		$_SESSION['usuariolg'] = $datos['NombreUsuario'];
		$_SESSION['id'] = $datos['Cod_usuario'];
		$_SESSION['tipo'] = $datos['tipo_usuario'];
	else:
		echo json_encode(array('error' => true));
	endif;
		
$mysqli->close();	
?>