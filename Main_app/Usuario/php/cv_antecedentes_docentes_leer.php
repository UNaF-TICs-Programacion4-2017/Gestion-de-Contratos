<?php
    session_start();
    //including the database connection file
    include_once("config.php");
    $idusuario = $_SESSION['id'];
    //fetching data in descending order (lastest entry first)
    //$result = $dbConn->query("SELECT * FROM antecedentes_docentes ORDER BY id_ant_doc ASC");
    function leerDatosHaciaAdelante($gbd) {
  //$sql = 'SELECT hand, won, bet FROM mynumbers ORDER BY BET';
        global $idusuario;
  $sql = 'SELECT * FROM antecedentes_docentes WHERE rela_usuario = \''.$idusuario.'\'';
  try {
    $sentencia = $gbd->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $sentencia->execute();
    while ($fila = $sentencia->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) {
      //$datos = $fila[0] . "\t" . $fila[1] . "\t" . $fila[2] . "\n";
      //print $datos;
      echo "<tr>";                                              
      echo "<td>".$fila['desde']."</td>";
      echo "<td>".$fila['hasta']."</td>"; 
      echo "<td>".$fila['universidad']."</td>";
      echo "<td>".$fila['cargo']."</td>";
      echo "<td>".$fila['catedra']."</td>"; 
      echo "<td>".$fila['carrera']."</td>";
      echo "<td>".$fila['facultad']."</td>";
      echo "<td><a href= \"cv_antecedentes_docentes_modificar.php?id_ant_doc=$fila[id_ant_doc]\">Modificar</a></td>";
      echo "<td><a href=\"cv_antecedentes_docentes_borrar.php?id_ant_doc=$fila[id_ant_doc]\" onClick=\"return confirm('Estas seguro de querer borrar?')\" >Borrar</a></td>"; 
    }
    $sentencia = null;
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }
}
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
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                            <a href="../php/cv_datos_personales_leer.php"><i class="fa fa-user fa-fw"></i> Datos Personales</a>
                        </li>
                        <li>
                            <a href="../php/cv_estudios_cursados_leer.php"><i class="fa fa-mortar-board fa-fw"></i> Estudios Cursados</a>
                        </li>
                              <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Antecedentes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../php/cv_antecedentes_docentes_leer.php">Docentes</a>
                                </li>
                                <li>
                                    <a href="../php/cv_antecedentes_laborales_leer.php">Laborales</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="../php/cv_publicaciones_leer.php"><i class="fa fa-book fa-fw"></i>Publicaciones y Trabajos de Investigacion</a>
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
                            Antecedentes Docentes
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div class="table-responsive">

                                <table align = "center" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Desde</th>
                                            <th>Hasta</th>
                                            <th>Universidad</th>
                                            <th>Cargo</th>
                                            <th>Catedra</th>
                                            <th>Carrera</th>
                                            <th>Editar</th>
                                            <th>Borrar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php  leerDatosHaciaAdelante($dbConn); 
                                    ?>
                                    </tbody>
                            </table>
                        </div>
                        
                            <a href="../php/cv_antecedentes_docentes.php" class="btn btn-primary btn-sm">Agregar</a>
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
    
    <!-- jQuery -->
    <script src="../../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../../dist/js/sb-admin-2.js"></script>

</body>

</html>
