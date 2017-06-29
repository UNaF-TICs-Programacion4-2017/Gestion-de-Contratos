<?php  
if (isset($_SESSION)) {
	session_destroy();
} else {
	session_start();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body background="img/fondo.jpg">
<div class="error">
	<span>El nombre de usuario o contraseña no son válidos</span>
</div>
<div class="main">
	<form action="" id="formlg">
		<input type="text" name="usuariolg" placeholder="nombre de usuario" required="true" />
		<input type="password" name="passlg" placeholder="password" required="true" />
		<input type="submit" id="botonlg" name="botonlg" value="iniciar sesion" />
	</form>

	<div>
		<br>
			<?php  
				 echo '<a href="registrarse.php">Usuario Nuevo? => Registrarse</a>';
			?>
		<br>
	</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>