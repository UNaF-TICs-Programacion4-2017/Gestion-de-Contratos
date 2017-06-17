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

	// checking empty fields
	if(empty($apellido) || empty($nombre) || empty($dni) || empty($cuil)|| empty($domicilio) || empty($celular) || empty($email)) {
				
		if(empty($apellido)) {

			echo "<font color='red'>El campo Apellido esta vacio.</font><br/>";
			
		}
		
		if(empty($nombre)) {
			echo "<font color='red'>El campo Nombre esta vacio.</font><br/>";
		}
		
		if(empty($dni)) {
			echo "<font color='red'>El campo DNI esta vacio.</font><br/>";
		}
		if(empty($cuil)) {
			echo "<font color='red'>El campo CUIL/CUIT esta vacio.</font><br/>";
		}
		
		if(empty($domicilio)) {
			echo "<font color='red'>El campo Domicilio esta vacio.</font><br/>";
		}
		
		if(empty($celular)) {
			echo "<font color='red'>El campo Celular esta vacio.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>El campo Email esta vacio.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
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
		
		//display success message
		//echo "<font color='green'>Los datos se guardaron exitosamente.";
		//echo "<br/><a href='../php/leer_cvdatos.php'>View Result</a>";
		header("Location:../php/leer_cvdatos.php");
	}
}
?>
</body>
</html>
