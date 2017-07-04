<?php  
/*session_start();
include_once("config.php");
    //echo $idusuario;
    $idusuario = $_SESSION['id'];
    //fetching data in descending order (lastest entry first)
    $result = $dbConn->query('SELECT asignatura, cargo, desde, hasta, autoridad, fecha, monto FROM datos_personas, contratos, usuarios WHERE contratos.rela_persona= datos_personas.id_persona AND datos_personas.rela_usuario= usuarios.Cod_usuario AND usuarios.Cod_usuario = \''.$idusuario.'\'');
    //print_r($result);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    print_r($row);
    if (!empty($row)) {
        $contenido = 1;
		echo $idusuario;
    }
*/
session_start();
include_once("config.php");
$idusuario = $_SESSION['id'];
$sql= 'SELECT asignatura, cargo, desde, hasta, autoridad, fecha, monto FROM datos_personas, contratos, usuarios WHERE contratos.rela_persona= datos_personas.id_persona AND datos_personas.rela_usuario= usuarios.Cod_usuario AND usuarios.Cod_usuario = \''.$idusuario.'\'';
$sentencia = $dbConn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$sentencia->execute();

?>

<html lang="en">
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

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
                            <a href="cv_datos_personales_leer.php"><i class="fa fa-user fa-fw"></i> Datos Personales</a>
                        </li>
                        <li>
                            <a href="cv_estudios_cursados_leer.php"><i class="fa fa-mortar-board fa-fw"></i> Estudios Cursados</a>
                        </li>
                              <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Antecedentes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cv_antecedentes_docentes_leer.php">Docentes</a>
                                </li>
                                <li>
                                    <a href="cv_antecedentes_laborales_leer.php">Laborales</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-check-square fa-fw"></i> Ver Materias Asignadas</a>
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
                        <h1 class="page-header">Sus Materias</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4> <?php echo strtoupper($_SESSION['usuariolg']);?> estos son sus contratos: </h4>
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table align = "center" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Asignatura</th>
                                            <th>Cargo</th>
                                            <th>Desde</th>
                                            <th>Hasta</th>
                                            <th>Decano</th>
                                            <th>Fecha contrato</th>
                                            <th>Monto</th>                                         
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                           <?php    
                                                /*
                                                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                                //$contenido = count($row);   
                                                echo "<tr>";
                                                echo "<td>".$row['asignatura']."</td>";
                                                echo "<td>".$row['cargo']."</td>";
                                                echo "<td>".$row['desde']."</td>"; 
                                                echo "<td>".$row['hasta']."</td>";
                                                echo "<td>".$row['autoridad']."</td>";
                                                echo "<td>".$row['fecha']."</td>";  
                                                echo "<td>".$row['monto']."</td>";
                                                echo "<tr>";
                                                }
                                                */
                                                while ($fila = $sentencia->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) {
                                                  echo "<tr>";                                              
                                                  echo "<td>".$fila['asignatura']."</td>";
                                                  echo "<td>".$fila['cargo']."</td>"; 
                                                  echo "<td>".$fila['desde']."</td>";
                                                  echo "<td>".$fila['hasta']."</td>";
                                                  echo "<td>".$fila['autoridad']."</td>"; 
                                                  echo "<td>".$fila['fecha']."</td>";
                                                  echo "<td>".$fila['monto']."</td>";
                                                  echo "</tr>";
                                                }
                                                //$sentencia = null;
                                            ?>                                   
                                    </tbody>
                            </table>
                        <!--/div >                        
                            <a href="../html/cv_datos_personales.php" id="btnagregar" class="btn btn-primary btn-sm">Agregar</a>
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
                alert('lo sentimos, aun no tienes contratos asignados');
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
