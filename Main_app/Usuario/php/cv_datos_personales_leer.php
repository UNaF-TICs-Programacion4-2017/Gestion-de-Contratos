<?php session_start(); 
    //print_r($_SESSION);
    
    include_once("config.php");
    //echo $idusuario;
    $idusuario = $_SESSION['id'];
    //fetching data in descending order (lastest entry first)
    $result = $dbConn->query('SELECT * FROM datos_personas, usuarios WHERE rela_usuario = \''.$idusuario.'\'');
    //print_r($result);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if (!empty($row)) {
        $contenido = 1;
    }
?>

<html lang="en">
<!DOCTYPE html>

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
                            <a href="#"><i class="fa fa-user fa-fw"></i> Datos Personales</a>
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
                            <a href="user_vermiscontratos.php"><i class="fa fa-check-square fa-fw"></i> Ver Materias Asignadas</a>
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
                                <table align = "center" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                            <!--<th>Borrar</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>                                     
                                           <?php    
                                                //while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                                //$contenido = count($row);   
                                                echo "<tr>";
                                                echo "<td>".$row['apellido']."</td>";
                                                echo "<td>".$row['nombre']."</td>";
                                                echo "<td>".$row['dni']."</td>"; 
                                                echo "<td>".$row['cuil']."</td>";
                                                echo "<td>".$row['domicilio']."</td>";
                                                echo "<td>".$row['telefono']."</td>"; 
                                                echo "<td>".$row['celular']."</td>"; 
                                                if (!empty($contenido)) {
                                                   echo "<td><a href= \"cv_datos_personales_modificar.php?id_persona=$row[id_persona]\">Modificar</a></td>";
                                                   //echo "<td><a href=\"cv_datos_personales_borrar.php?id_persona=$row[id_persona]\" onClick=\"return confirm('Estas seguro de querer borrar?')\" >Borrar</a></td>";
                                                }
                                                
                                            ?>                                        
                                    </tbody>
                            </table>
                        </div >                        
                            <a href="cv_datos_personales.php" id="btnagregar" class="btn btn-primary btn-sm">Agregar</a>
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
   <?php 
     if (!empty($contenido)) {
             echo "<script language='JavaScript'>
                alert('El Usuario ya tiene datos personales');
                var elemento = document.getElementById('btnagregar');
                elemento.style.display = 'none'; 
              </script>";
        } 
    ?>
    <!-- jQuery -->
    
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
