<?php
session_start();
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$id_titulo = $_POST['id_titulo'];
	
	$rela_tipo_titulo = $_POST['rela_tipo_titulo'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];
    $universidad = $_POST['universidad'];
    $titulo_obtenido = $_POST['titulo_obtenido'];

 		//updating the table
		$sql = "UPDATE titulos_obtenidos SET rela_titulo=:rela_tipo_titulo, desde=:desde, hasta=:hasta, universidad=:universidad, titulo=:titulo_obtenido WHERE id_titulo=:id_titulo";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':id_titulo', $id_titulo);
		
		$query->bindparam(':rela_tipo_titulo', $rela_tipo_titulo);
        $query->bindparam(':desde', $desde);
        $query->bindparam(':hasta', $hasta);
        $query->bindparam(':universidad', $universidad);
        $query->bindparam(':titulo_obtenido', $titulo_obtenido);

		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
				
		//redirectig to the display page. In our case, it is index.php
		//header("Location: index.php");
        header("Location:../php/cv_estudios_cursados_leer.php");
}
?>

<?php

    //getting id from url
    $id_titulo = $_GET['id_titulo'];

    //selecting data associated with this particular id
    $sql = "SELECT rela_titulo, desde, hasta, universidad, titulo FROM titulos_obtenidos WHERE id_titulo=:id_titulo";
   

    $query = $dbConn->prepare($sql);
    $query->execute(array(':id_titulo' => $id_titulo));

    while($row = $query->fetch(PDO::FETCH_ASSOC))
    {

    	$rela_tipo_titulo = $row['rela_titulo'];
    	$desde = $row['desde'];
    	$hasta = $row['hasta'];
    	$universidad = $row['universidad'];
    	$titulo_obtenido =$row['titulo'];
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
                            <a href="../php/cv_publicaiones_leer.php"><i class="fa fa-book fa-fw"></i>Publicaciones y Trabajos de Investigacion</a>
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
                            Estudios Cursados
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="../php/cv_estudios_cursados_modificar.php" method="post" name="form1">

                                        <div class="form-group">
                                            <label>Tipo Titulo</label>
                                            <select name="rela_tipo_titulo" class="form-control" value="<?php echo $rela_tipo_titulo;?>">
                                                <option value="1">Grado</option>
                                                <option value="2">Posgrado</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Desde</label>
                                            <input type="text" name="desde" class="form-control" value="<?php echo $desde;?>">
     
                                        </div>

                                        <div class="form-group">
                                            <label>Hasta</label>
                                            <input type="text" name="hasta" class="form-control" value="<?php echo $hasta;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Universidad</label>
                                            <input type="text" name="universidad" class="form-control" value="<?php echo $universidad;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Titulo Obtenido</label>
                                            <input type="text" name="titulo_obtenido" class="form-control" value="<?php echo $titulo_obtenido;?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Id titulo</label>
                                            <input type="text" name="id_titulo" value="<?php echo $_GET['id_titulo'];?>">
                                        </div>

                                        <td><input type="submit" name="Submit" value="Aceptar" class="btn btn-default"></td>
                                        <td><a href="../php/cv_estudios_cursados_leer.php" class="btn btn-default">Cancelar</a></td>

                                        </div>
                                                                                                                     
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
    <script src="../../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../../dist/js/sb-admin-2.js"></script>
    
</body>

</html>


