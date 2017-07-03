<?php session_start(); 
include_once("config.php");
$idusuario = $_SESSION['id'];
$result = $dbConn->query('SELECT * FROM usuarios');
    
$row = $result->fetch(PDO::FETCH_ASSOC);
if (!empty($row)) {
        $contenido = 1;
    }
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrador</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><?php echo strtoupper($_SESSION['usuariolg']);?></a>
	            
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-key fa-fw"></i> Cambiar Contraseña</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       	
                       	<li>
                            <a href="panel_control.php"><i class="fa fa-dashboard fa-fw"></i>Panel de Control</a>
                        </li>

                        <!--<li>
                            <a href="forms.html"><i class="fa fa-file-text fa-fw"></i> Dictamenes</a>
                       <li>
                       -->
                         <li>
                            <a href="contratos_leer.php"><i class="fa fa-file-text-o fa-fw"></i>Contratos</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Usuarios</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

         <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Datos de Usuario</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ingrese los datos del nuevo usuario administrador del sistema
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="admin_guardar.php" method="post" name="form1">
                                        <div class="form-group">
                                            <label>Nombre de Usuario</label>
                                            <input type="text" name="nombre" class="form-control" placeholder="Ingresar el nombre del nuevo usuario" required="true">
     
                                        </div>

                                        <div class="form-group">
                                            <label>ALIAS</label>
                                            <input type="text" name="alias" class="form-control" placeholder="Ingresar el ALIAS del nuevo usuario" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="pass" class="form-control" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="email" name="email" class="form-control" required="true">
                                        </div>


                                         <td><input type="submit" name="Submit" value="Aceptar" class="btn btn-default"></td>
                                         <td><a href="index.php" class="btn btn-default">Cancelar</a></td> 
                                                                             
                                    </form>
                    
                        </div>
                        <!-- /.panel-body -->
     
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>
<!--
<div class="error">
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

</body>
</html>