<html>
<head>
	<title>Agregar Antecedentes Docentes</title>
	
</head>

<body>
<?php
session_start();
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	

	$desde = $_POST['desde'];
	$hasta = $_POST['hasta'];
	$universidad = $_POST['universidad'];
	$cargo = $_POST['cargo'];
	$catedra = $_POST['catedra'];
	$carrera = $_POST['carrera'];
	$facultad = $_POST['facultad'];
		
		//insert data to database		
		$sql = "INSERT INTO antecedentes_docentes(desde, hasta, universidad, cargo, catedra, carrera, facultad) VALUES(:desde, :hasta, :universidad, :cargo, :catedra, :carrera, :facultad)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':desde', $desde);
		$query->bindparam(':hasta', $hasta);
		$query->bindparam(':universidad', $universidad);
		$query->bindparam(':cargo', $cargo);
		$query->bindparam(':catedra', $catedra);
		$query->bindparam(':carrera', $carrera);
		$query->bindparam(':facultad', $facultad);
		
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		header("Location:../php/cv_antecedentes_docentes_leer.php");
}
?>
</body>
</html>
