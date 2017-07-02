<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Curriculum Vitae</title>

    <!-- Bootstrap Core CSS -->
    <link href="../usuario/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../usuario/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../usuario/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../usuario/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

                <?php 
                    
                    //$GLOBALS['idusuario'] = $_SESSION['id'];
                    //$idusuario = $_SESSION['id'];
                    print_r($_SESSION);
                    $usuarioactual = strtoupper($_SESSION['usuariolg']);
                    //print_r($_POST);
                    
                    //echo $GLOBALS['idusuario'];
                    $variable_php="variable en php";
echo '<script languaje="JavaScript">
            

      var varjs="'.$_SESSION['usuariolg'].'";
            

      alert("bienvenido " + varjs + " te estabamos esperando");
            

</script>';
                 ?>
	            <script type="text/javascript">
                //usuariosaludo = "<?=usuarioactual?>";
                alert ("buenos dias Bienvenido");
                </script>
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
                            <a href="../usuario/php/cv_datos_personales_leer.php"><i class="fa fa-user fa-fw"></i> Datos Personales</a>
                        </li>
                        <li>
                            <a href="../usuario/php/cv_estudios_cursados_leer.php"><i class="fa fa-mortar-board fa-fw"></i> Estudios Cursados</a>
                        </li>
                              <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Antecedentes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../usuario/php/cv_antecedentes_docentes.php">Docentes</a>
                                </li>
                                <li>
                                    <a href="../usuario/php/cv_antecedentes_laborales.php">Laborales</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="cvpublicaciones1.html"><i class="fa fa-book fa-fw"></i>Publicaciones y Trabajos de Investigacion</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-search fa-fw"></i> Ver Curriculum</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-check-square fa-fw"></i> Ver Materias Asignadas</a>
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
                        <h1 class="page-header">Bienvenido lo estabamos esperando...</h1>
                    </div>

                        <form role="form">
                            
                            <div class="panel-body">
                                <h1><small>Envíenos su Currículum</small></h1>
                                
                                <div align="left" class="form-group">
                                    <p>
                                        Somos una institución en continuo crecimiento y siempre en búsqueda de personal con talento. Profesionales y jóvenes con una relevante carrera profesional o con interés en adquirir su primera experiencia laboral pueden integrarse a un equipo de trabajo dinámico y proactivo.
                                    </p>
                               </div>
                                
                                 <!-- /<div align="center" class="form-group">
                                   // <img src="../images/unaf.jpg" width="385" height="385" >
                               </div> -->
                            </div>

                        </form>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../usuario/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../usuario/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../usuario/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../usuario/dist/js/sb-admin-2.js"></script>
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