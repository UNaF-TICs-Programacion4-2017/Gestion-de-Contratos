<?php  
session_start();
require 'conexion.php';
//$usuario = $_POST['usuariolg'];
//$email = $_POST['correolg'];
	$pass = $_POST['passreg'];
	$usuario = $_POST['usuarioreg'];
	$email = $_POST['correoreg'];
	$nombre = $_POST['nombrereg'];
	$tipouser = 'User';
	/*$usuarios = $mysqli->query('SELECT * FROM usuarios WHERE email = \''.$email.'\' OR Usuario = \''.$usuario.'\'');
	*/
	$usuarios = $mysqli->query("SELECT * FROM usuarios WHERE email = '".$email."' OR Usuario = '".$usuario."'");

	if($usuarios->num_rows == 1):
		echo json_encode(array('error' => true));
		
	else:
		//$datos = $usuarios->fetch_assoc();
		echo json_encode(array('error'=> false)); //, 'tipo' => $datos));
		//$_SESSION['usuariolg'] = $datos['nombre'];
		//session_start();
		$_SESSION['usuarioreg'] = $usuario;
		$_SESSION['passreg'] = $pass;
		$_SESSION['correoreg'] = $email;
		$_SESSION['nombrereg'] = $nombre;
		$_SESSION['tiporeg'] = $tipouser;
	endif;
	
			
$mysqli->close();	
?>