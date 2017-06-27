<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contratos</title>

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
                            <a href="forms.html"><i class="fa fa-user fa-fw"></i>Usuarios</a>
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
                        <h1 class="page-header">Contratos</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Datos de Contrato
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="../Admin/contratos_agregar.php" method="post" name="form1">

                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="text" name="fecha" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label>Decano</label>
                                            <input type="text" name="decano" class="form-control" >
                                        </div> 

                                        <div class="form-group">
                                            <label>Dni</label>
                                            <input type="text" name="decano_dni" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label>Contratado</label>
                                            <input  type="text" name="nombre_contratado" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>DNI</label>
                                            <input type="text" name="dni" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>CUIT</label>
                                            <input type="text" name="cuit" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Domicilio</label>
                                            <input type="text" name="domicilio" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Cargo</label>
                                            <input type="text" name="cargo" class="form-control">
                                        </div>
                                         <div class="form-group">
                                            <label>Asignatura</label>
                                            <input type="text" name="fecha_nac" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Carrera</label>
                                            <input type="text" name="carrera" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Desde</label>
                                            <input type="text" name="desde" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Hasta</label>
                                            <input type="text" name="hasta" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Monto</label>
                                            <input type="text" name="monto" class="form-control">
                                        </div>
                                        
                                         <td><input type="submit" name="Submit" value="Aceptar" class="btn btn-default"></td>
                                         <td><a href="../Admin/contratos_leer.php" class="btn btn-default">Cancelar</a></td> 
                                         <td><a href="../exportar_contrato.php" class="btn btn-default">Exportar</a></td> 
                                                                             
                                    </form>

                                </div>
                                <!-- /.col-lg-6 (nested) -->

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
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>
    
</body>

</html>
