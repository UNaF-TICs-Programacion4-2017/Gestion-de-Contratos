<?php
    //including the database connection file
    include_once("config.php");

    //fetching data in descending order (lastest entry first)
    $result = $dbConn->query("SELECT * FROM datos_personas ORDER BY id_persona ASC");
?>


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
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
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
                            <a href="../php/leer_cvdatos.php"><i class="fa fa-user fa-fw"></i> Datos Personales</a>
                        </li>
                        <li>
                            <a href="cvestudios1.html"><i class="fa fa-mortar-board fa-fw"></i> Estudios Cursados</a>
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

                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div class="table-responsive">

                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Apellido</th>
                                            <th>Nombre</th>
                                            <th>DNI</th>
                                            <th>CUIL/CUIT</th>
                                            <th>Domicilio</th>
                                            <th>Telefono</th>
                                            <th>Celular</th>
                                            <th>Editar</th>
                                            <th>Borrar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                           <?php    
                                                while($row = $result->fetch(PDO::FETCH_ASSOC)) {        
                                                echo "<tr>";
                                                echo "<td>".$row['apellido']."</td>";
                                                echo "<td>".$row['nombre']."</td>";
                                                echo "<td>".$row['dni']."</td>"; 
                                                echo "<td>".$row['cuil']."</td>";
                                                echo "<td>".$row['domicilio']."</td>";
                                                echo "<td>".$row['telefono']."</td>"; 
                                                echo "<td>".$row['celular']."</td>"; 
                                                echo "<td><a href= \"actualizar_cvdatos.php?id_persona=$row[id_persona]\">Modificar</a></td>";
                                                echo "<td><a href=\"borrar_cvdatos.php?id_persona=$row[id_persona]\" onClick=\"return confirm('Estas seguro de querer borrar?')\" >Borrar</a></td>";       
                                              }
                                            ?>
                                       
                                    </tbody>
                            </table>
                        </div>
                        
                            <a href="../html/cvdatos.html" class="btn btn-primary btn-sm">Agregar</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                </div>
                            <!-- /.panel-body -->
            </div>
                    <!-- /.panel -->
        </div>
                <!-- /.col-lg-12 -->
        


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
