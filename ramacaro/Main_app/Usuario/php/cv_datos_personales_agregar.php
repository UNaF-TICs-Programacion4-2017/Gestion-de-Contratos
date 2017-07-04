<?php session_start();?>
<html>
<head>
	<title>Agregar Datos Personales</title>
	
</head>

<body>
<?php
//including the database connection file
include_once("config.php");
print_r($_SESSION);
echo $_SESSION['id'];
if(isset($_POST['Submit'])) {	
	$check = @getimagesize($_FILES['foto']['tmp_name']);
	if ($check !== false) {
		$carpeta_destino = 'fotos/';
		$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
	}
	$apellido = $_POST['apellido'];
	$nombre = $_POST['nombre'];
	$dni = $_POST['dni'];
	$cuil = $_POST['cuil'];
	$nacionalidad = $_POST['nacionalidad'];
	$lugar_nac = $_POST['lugar_nac'];
	$fecha_nac = $_POST['fecha_nac'];
	$domicilio = $_POST['domicilio'];
	$telefono = $_POST['telefono'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$rela_usuario = $_SESSION['id'];

	$fecha_nac = str_replace('/', '-', $fecha_nac);
	$fechaBD = date("Y-m-d", strtotime($fecha_nac));
		
		//insert data to database		
		$sql = "INSERT INTO datos_personas(apellido, nombre, dni, cuil, nacionalidad, lugar_nac, fecha_nac, domicilio, telefono, celular, email, rela_usuario, foto) VALUES(:apellido, :nombre, :dni, :cuil, :nacionalidad, :lugar_nac, :fecha_nac, :domicilio, :telefono, :celular, :email, :rela_usuario, :foto)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':apellido', $apellido);
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':dni', $dni);
		$query->bindparam(':cuil', $cuil);
		$query->bindparam(':nacionalidad', $nacionalidad);
		$query->bindparam(':lugar_nac', $lugar_nac);
		$query->bindparam(':fecha_nac', $fechaBD);
		$query->bindparam(':domicilio', $domicilio);
		$query->bindparam(':telefono', $telefono);
		$query->bindparam(':celular', $celular);
		$query->bindparam(':email', $email);
		$query->bindparam(':rela_usuario', $rela_usuario);
		$query->bindparam(':foto', $_FILES['foto']['name']);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		//header("Location:../php/cv_datos_personales_leer.php");
		header("Location:../index.php");
}
?>
</body>
</html>
