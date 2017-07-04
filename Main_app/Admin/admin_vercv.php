<?php session_start(); 
include_once("config.php");
//$idusuario = $_SESSION['id'];
$idusuario = 4;
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

                        <li>
                            <a href="forms.html"><i class="fa fa-file-text fa-fw"></i> Teléfonos de Contacto</a>
                        <li>
               
                        <li>
                            <a href="contratos_leer.php"><i class="fa fa-file-text-o fa-fw"></i>Contratos</a>
                        </li>
                        <li>
                            <a href="admin_listacontratados.php"><i class="fa fa-search fa-fw"></i>Lista de Personas Contratadas</a>
                        <li>
                        <li>
                            <a href="admin_cv.php"><i class="fa fa-file-text fa-fw"></i>Ver Curriculum</a>
                       <li>
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

                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table align = "center" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <!--<th>Tipo Titulo</th>-->
                                            <th>Tipo titulo</th>
                                            <th>Desde</th>
                                            <th>Hasta</th>
                                            <th>Titulo</th>
                                            <th>Universidad</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php  
                                       //estudios cursados
$sql = 'SELECT * FROM titulos_obtenidos WHERE rela_usuario = \''.$idusuario.'\'';

$sentencia = $dbConn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$sentencia->execute();
while ($fila = $sentencia->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) {
      
      echo "<tr>";     
      echo "<td>".$fila['tipo_titulo']."</td>";                           
      echo "<td>".$fila['desde']."</td>";
      echo "<td>".$fila['hasta']."</td>"; 
      echo "<td>".$fila['titulo']."</td>";
      echo "<td>".$fila['universidad']."</td>";
      echo "<tr>";
}
    $sentencia = null;      
//
                                       ?> 
                                    </tbody>
                                </table>
                            </div>
                        
                            
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

    <!-- Page Content -->
        <div id="page-wrapper">
           
                <div class="row">
                    
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
                                            <th>Facultad</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php  
                                        $sql = 'SELECT * FROM antecedentes_docentes WHERE rela_usuario = \''.$idusuario.'\'';
$sentencia = $dbConn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $sentencia->execute();
    while ($fila = $sentencia->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) {
      echo "<tr>";                                             
      echo "<td>".$fila['desde']."</td>";
      echo "<td>".$fila['hasta']."</td>"; 
      echo "<td>".$fila['universidad']."</td>";
      echo "<td>".$fila['cargo']."</td>";
      echo "<td>".$fila['catedra']."</td>"; 
      echo "<td>".$fila['carrera']."</td>";
      echo "<td>".$fila['facultad']."</td>";
     
    }
    $sentencia = null;
                                     ?> 
                                    </tbody>
                            </table>
                        </div>
                        
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                </div>
                            <!-- /.panel-body -->
            
                    <!-- /.panel -->
        </div>
                <!-- /.col-lg-12 -->
    
    <!-- Page Content -->
        <div id="page-wrapper">

                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Antecedentes Laborales
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div class="table-responsive">

                                <table align = "center" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Desde</th>
                                            <th>Hasta</th>
                                            <th>Organizacion</th>
                                            <th>Cargo</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>  
                                       <?php  
                                       $sql = 'SELECT * FROM antecedentes_laborales WHERE rela_usuario = \''.$idusuario.'\'';
 $sentencia = $dbConn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $sentencia->execute();
    while ($fila = $sentencia->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) {
      echo "<tr>";                                              
      echo "<td>".$fila['desde']."</td>";
      echo "<td>".$fila['hasta']."</td>"; 
      echo "<td>".$fila['organizacion']."</td>";
      echo "<td>".$fila['cargo']."</td>";   
    }
    $sentencia = null;  
                                       ?>     
                                    </tbody>
                            </table>
                        </div>                       
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                </div>
                            <!-- /.panel-body -->
            
                    <!-- /.panel -->
        </div>
                <!-- /.col-lg-12 -->
            

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