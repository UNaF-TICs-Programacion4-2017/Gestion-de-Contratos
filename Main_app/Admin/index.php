<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
</head>
<body>
<!--<div class="error">
	<span>datos de ingreso no validos</span>
</div>
<div class="main">
	<form action="" id="formlg">
		<input type="text" name="usuariolg" placeholder="nombre de usuario" required="true" />
		<input type="password" name="passlg" placeholder="password" required="true" />
		<input type="submit" name="botonlg" value="iniciar sesion" />
	</form>
</div>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/main.js"></script>-->
<?php
echo "BIENVENIDO ". strtoupper($_SESSION['usuariolg']) ." LO ESTABAMOS ESPERANADO";
?>	

</body>
</html>