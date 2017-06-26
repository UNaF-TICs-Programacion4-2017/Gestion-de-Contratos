<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body background="img/fondo.jpg">
<div class="error">
	<span>El email ingresado pertenece a un usuario registrado, ingrese otro por favor.</span>
</div>
<div class="main">
	<form  method="POST" id="formlg">
		<input type="email" name="correolg" placeholder="ingrese su email" required="true"/>
		<input type="text" name="usuariolg" placeholder="ingrese su nombre de usuario" required="true" />
		<input type="password" name="passlg" placeholder="ingrese su password" required="true" />
		<input type="submit" name="botonlg" value="Registrarse" />
	</form>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/validar.js"></script>
</body>
</html>