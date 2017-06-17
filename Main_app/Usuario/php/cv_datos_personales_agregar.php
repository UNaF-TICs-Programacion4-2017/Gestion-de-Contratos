<html>
<head>
	<title>Agregar Datos Personales</title>
	
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
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
	
	$fecha_nac = str_replace('/', '-', $fecha_nac);
	$fechaBD = date("Y-m-d", strtotime($fecha_nac));
		
		//insert data to database		
		$sql = "INSERT INTO datos_personas(apellido, nombre, dni, cuil, nacionalidad, lugar_nac, fecha_nac, domicilio, telefono, celular, email) VALUES(:apellido, :nombre, :dni, :cuil, :nacionalidad, :lugar_nac, :fecha_nac, :domicilio, :telefono, :celular, :email)";
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
		
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		header("Location:../php/cv_datos_personales_leer.php");
}
?>
</body>
</html>
