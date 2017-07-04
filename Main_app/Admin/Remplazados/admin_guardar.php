<?php
session_start();
//including the database connection file
echo '<li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i>...Presione aqui para continuar..</a>
</li>';
include_once("config.php");

if(isset($_POST['Submit'])) {	

	$nombre = $_POST['nombre'];
	$alias = $_POST['alias'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$tipo = 'Admin';
	
		
		//insert data to database		
		$sql = "INSERT INTO usuarios(NombreUsuario, Usuario, Password, Tipo_usuario, email) VALUES(:nombre, :alias, :pass, :email, :tipo)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':alias', $alias);
		$query->bindparam(':pass', $pass);
		$query->bindparam(':email', $email);
		$query->bindparam(':tipo', $tipo);
	
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		echo '<script languaje="JavaScript">
     	var varjs="'.$nombre.'";
      	alert("EL USUARIO " + varjs + " HA SIDO DADO DE ALTA COMO ADMINISTRADOR");
		/script>';	
		
		
}
?>
</body>
</html>