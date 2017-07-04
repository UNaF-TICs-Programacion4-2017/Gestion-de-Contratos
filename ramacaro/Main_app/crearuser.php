<?php session_start();?>
<html>
<head>
	<title>Agregar Un Nuevo Usuario</title>	
</head>

<body>
<?php
//including the database connection file
include_once("config.php");
print_r($_SESSION); 
if(isset($_POST['botonlg'])) {	
	$pass = $_POST['passlg'];
	$usuario = $_POST['usuariolg'];
	$email = $_POST['correolg'];
	$nombre = $_POST['nombrelg'];
	$tipouser = 'User';
	print_r($_POST);
	echo $tipouser;
	
		
		//insert data to database		
		$sql = "INSERT INTO usuarios(Nombre, Usuario, Password, Tipo_usuario, email) VALUES(:Nombre, :Usuario, :Password, :Tipo_usuario, :email)";
		$query = $dbConn->prepare($sql);

		$query->bindparam(':Nombre', $nombre);		
		$query->bindparam(':Usuario', $usuario);
		$query->bindparam(':Password', $pass);
		$query->bindparam(':Tipo_usuario', $tipouser);
		$query->bindparam(':email', $email);
		
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		//header("Location:../php/cv_datos_personales_leer.php");
		echo "se creoo el user?";
		//header("Location:/Main_app/logout.php");*/
		echo "se creo el user?";

?>
</body>
</html>