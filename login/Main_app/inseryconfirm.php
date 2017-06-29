<?php  
session_start();
print_r($_SESSION);

echo '<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
</li>';
include_once("config.php");
$pass = $_SESSION['passreg'];
$usuario = $_SESSION['usuarioreg'];
$email = $_SESSION['correoreg'];
$nombre = $_SESSION['nombrereg'];
$tipouser = $_SESSION['tiporeg'];
echo $pass;
echo "<br>";
echo $usuario;
echo "<br>";
echo $nombre;
echo "<br>";
echo $tipouser;
echo "<br>";

$sql = "INSERT INTO usuarios(Nombre, Usuario, Password, Tipo_usuario, email) VALUES(:Nombre, :Usuario, :Password, :Tipo_usuario, :email)";
		$query = $dbConn->prepare($sql);

		$query->bindparam(':Nombre', $nombre);		
		$query->bindparam(':Usuario', $usuario);
		$query->bindparam(':Password', $pass);
		$query->bindparam(':Tipo_usuario', $tipouser);
		$query->bindparam(':email', $email);		
		$query->execute();
echo "se creoo el user?";
		
?>