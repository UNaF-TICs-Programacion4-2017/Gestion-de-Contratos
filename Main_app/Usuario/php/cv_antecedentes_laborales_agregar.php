<?php session_start();?>
<html>
<head>
	<title>Agregar Antecedentes Laborales</title>
	
</head>

<body>
<?php

//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	

	$desde = $_POST['desde'];
	$hasta = $_POST['hasta'];
	$organizacion = $_POST['organizacion'];
	$cargo = $_POST['cargo'];
	$rela_usuario = $_SESSION['id'];
		
		//insert data to database		
		$sql = "INSERT INTO antecedentes_laborales(desde, hasta, organizacion, cargo, rela_usuario) VALUES(:desde, :hasta, :organizacion, :cargo, :rela_usuario)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':desde', $desde);
		$query->bindparam(':hasta', $hasta);
		$query->bindparam(':organizacion', $organizacion);
		$query->bindparam(':cargo', $cargo);
		$query->bindparam(':rela_usuario', $rela_usuario);
	
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		header("Location:../php/cv_antecedentes_laborales_leer.php");
}
?>
</body>
</html>
