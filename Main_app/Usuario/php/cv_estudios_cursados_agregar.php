<html>
<head>
	<title>Agregar Estudios Cursados</title>
	
</head>

<body>
<?php
session_start();
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$tipo_titulo = $_POST['tipo_titulo'];
	$desde = $_POST['desde'];
	$hasta = $_POST['hasta'];
	$universidad = $_POST['universidad'];
	$titulo_obtenido = $_POST['titulo_obtenido'];
	$rela_usuario = $_SESSION['id'];
		
		//insert data to database		
		$sql = "INSERT INTO titulos_obtenidos(tipo_titulo, desde, hasta, universidad, titulo, rela_usuario) VALUES(:tipo_titulo, :desde, :hasta, :universidad, :titulo_obtenido, :rela_usuario)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':tipo_titulo', $tipo_titulo);
		$query->bindparam(':desde', $desde);
		$query->bindparam(':hasta', $hasta);
		$query->bindparam(':universidad', $universidad);
		$query->bindparam(':titulo_obtenido', $titulo_obtenido);
		$query->bindparam(':rela_usuario', $rela_usuario);

		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		header("Location:../php/cv_estudios_cursados_leer.php");
}
?>
</body>
</html>
