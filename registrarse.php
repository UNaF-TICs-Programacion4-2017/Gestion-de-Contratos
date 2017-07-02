<?php session_start(); 
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
	<span>El usuario o email ingresado pertenece a un usuario registrado, ingrese otro por favor.</span>
</div>
<!--action="Main_app/crearuser.php"-->
<div class="main">
	<form  id="formreg">
		<input type="text" id="nombrereg" name="nombrereg" placeholder="ingrese su nombre de pila" required="true" />
		<input type="email" id="correoreg" name="correoreg" placeholder="ingrese un email" required="true"/>
		<input type="text" id="usuarioreg" name="usuarioreg" placeholder="ingrese su ALIAS de usuario" required="true" />
		<input type="password" id="passreg" name="passreg" placeholder="ingrese su password" required="true" />
		<input type="submit" name="botonreg" id="botonreg" value="REGISTRARSE" />
	</form>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/validar.js"></script>
</body>
</html>