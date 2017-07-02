<?php  
session_start();
//print_r($_SESSION);

echo '<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>...Presione aqui para continuar..</a>
</li>';
include_once("config.php");
$pass = $_SESSION['passreg'];
$usuario = $_SESSION['usuarioreg'];
$email = $_SESSION['correoreg'];
$nombre = $_SESSION['nombrereg'];
$tipouser = $_SESSION['tiporeg'];
/*echo $pass;
echo "<br>";
echo $usuario;
echo "<br>";
echo $nombre;
echo "<br>";
echo $tipouser;
echo "<br>";
*/
$sql = "INSERT INTO usuarios(NombreUsuario, Usuario, Password, Tipo_usuario, email) VALUES(:NombreUsuario, :Usuario, :Password, :Tipo_usuario, :email)";
		$query = $dbConn->prepare($sql);

		$query->bindparam(':NombreUsuario', $nombre);		
		$query->bindparam(':Usuario', $usuario);
		$query->bindparam(':Password', $pass);
		$query->bindparam(':Tipo_usuario', $tipouser);
		$query->bindparam(':email', $email);		
		$query->execute();

echo '<script languaje="JavaScript">
      var varjs="'.$_SESSION['usuarioreg'].'";
      alert("EL USUARIO " + varjs + " HA SIDO CREADO CON EXITO, PRESIONE CONTINUAR PARA VOLVER A ENTRAR AL SISTEMA");
</script>';		
?>