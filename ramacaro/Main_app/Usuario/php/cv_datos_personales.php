<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Curriculum Vitae</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php  
//print_r($_SESSION);
?>
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
                <a class="navbar-brand" >Nombre Usuario</a>
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
                        <li><a href="../../logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
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
                            <a href="../php/cv_datos_personales_leer.php"><i class="fa fa-user fa-fw"></i> Datos Personales</a>
                        </li>
                        <li>
                            <a href="../php/cv_estudios_cursados_leer.php"><i class="fa fa-mortar-board fa-fw"></i> Estudios Cursados</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Antecedentes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cvantdoc1.html">Docentes</a>
                                </li>
                                <li>
                                    <a href="cvantlab1.html">Laborales</a>
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
                        <h1 class="page-header">Curriculum Vitae</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Datos Personales
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" enctype="multipart/form-data" action="../php/cv_datos_personales_agregar.php" method="post" name="form1">
                                        <div class="form-group">
                                            <label>Apellido</label>
                                            <input type="text" name="apellido" class="form-control" >
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->      
                                        </div>
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input  type="text" name="nombre" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>DNI</label>
                                            <input type="text" name="dni" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>CUIL/CUIT</label>
                                            <input type="text" name="cuil" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nacionalidad</label>
                                            <input type="text" name="nacionalidad" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Lugar de Nacimiento</label>
                                            <input type="text" name="lugar_nac" class="form-control">
                                        </div>
                                         <div class="form-group">
                                            <label>Fecha de Nacimiento</label>
                                            <input type="text" name="fecha_nac" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Domicilio</label>
                                            <input type="text" name="domicilio" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefono Fijo</label>
                                            <input type="text" name="telefono" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input type="text" name="celular" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                        
                                         <td><input type="submit" name="Submit" value="Aceptar" class="btn btn-default"></td>
                                         <td><a href="../php/cv_datos_personales_leer.php" class="btn btn-default">Cancelar</a></td> 
                                          
                                        <div align="center" class="form-group">
                                            <img src="../images/default-user.png" width="200" height="200" >
                                        </div>

                                        <div align="center" class="form-group">
                                            <label>Buscar Foto</label>
                                            <input type="file" id="foto" name="foto">
                                        </div>                                   
                                    </form>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"role="form">

                                        
                                    </form>
                                    
                                </div>

                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            
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
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
</body>

</html>
