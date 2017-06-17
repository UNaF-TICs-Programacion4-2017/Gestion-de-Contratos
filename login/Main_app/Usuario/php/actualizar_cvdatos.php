<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$id_persona = $_POST['id_persona'];
	
	$apellido = $_POST['apellido'];
	$nombre = $_POST['nombre'];
	$dni = $_POST['dni'];
	$cuil = $_POST['cuil'];
	$nacionalidad = $_POST['nacionalidad'];
	$lugar_nac = $_POST['lugar_nac'];
	$fecha_nac = $_POST['fecha_nac'];
	$domicilio = $_POST['domicilio'];
	$telefono = $_POST['telefono'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];	
	
    $fecha_nac = str_replace('/', '-', $fecha_nac);
    $fechaBD = date("Y-m-d", strtotime($fecha_nac));

	// checking empty fields
	if(empty($apellido) || empty($nombre) || empty($dni) || empty($cuil)|| empty($domicilio) || empty($celular) || empty($email)) {
				
		if(empty($apellido)) {
			echo "<font color='red'>El campo Apellido esta vacio.</font><br/>";
		}
		
		if(empty($nombre)) {
			echo "<font color='red'>El campo Nombre esta vacio.</font><br/>";
		}
		
		if(empty($dni)) {
			echo "<font color='red'>El campo DNI esta vacio.</font><br/>";
		}
		if(empty($cuil)) {
			echo "<font color='red'>El campo CUIL/CUIT esta vacio.</font><br/>";
		}
		
		if(empty($domicilio)) {
			echo "<font color='red'>El campo Domicilio esta vacio.</font><br/>";
		}
		
		if(empty($celular)) {
			echo "<font color='red'>El campo Celular esta vacio.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>El campo Email esta vacio.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//updating the table
		$sql = "UPDATE datos_personas SET apellido=:apellido, nombre=:nombre, dni=:dni, cuil=:cuil, nacionalidad=:nacionalidad, lugar_nac=:lugar_nac, fecha_nac=:fecha_nac, domicilio=:domicilio, telefono=:telefono, celular=:celular, email=:email  WHERE id_persona=:id_persona";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':id_persona', $id_persona);


		
		$query->bindparam(':apellido', $apellido);
		$query->bindparam(':nombre', $nombre);
		$query->bindparam(':dni', $dni);
		$query->bindparam(':cuil', $cuil);
		$query->bindparam(':nacionalidad', $nacionalidad);
		$query->bindparam(':lugar_nac', $lugar_nac);
		$query->bindparam(':fecha_nac', $fechaBD);
		$query->bindparam(':domicilio', $domicilio);
		$query->bindparam(':telefono', $telefono);
		$query->bindparam(':celular', $celular);
		$query->bindparam(':email', $email);


		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':id' => $id, ':name' => $name, ':email' => $email, ':age' => $age));
				
		//redirectig to the display page. In our case, it is index.php
		//header("Location: index.php");
        header("Location:../php/leer_cvdatos.php");
	}
}
?>
<?php
//getting id from url
$id_persona = $_GET['id_persona'];

//selecting data associated with this particular id
$sql = "SELECT apellido, nombre, dni, cuil, nacionalidad, lugar_nac, fecha_nac, domicilio, telefono, celular, email FROM datos_personas WHERE id_persona=:id_persona";
$query = $dbConn->prepare($sql);
$query->execute(array(':id_persona' => $id_persona));

while($row = $query->fetch(PDO::FETCH_ASSOC))
{

	$apellido = $row['apellido'];
	$nombre = $row['nombre'];
	$dni = $row['dni'];
	$cuil = $row['cuil'];
	$nacionalidad =$row['nacionalidad'];
	$lugar_nac = $row['lugar_nac'];
	$fecha_nac = $row['fecha_nac'];
	$domicilio = $row['domicilio'];
	$telefono = $row['telefono'];
	$celular = $row['celular'];
	$email =$row['email'];	

    $fecha_nac = date('d-m-Y', strtotime($fecha_nac));
    $fechaBD = str_replace('-', '/', $fecha_nac);


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
                            <a href="cvdatos1.html"><i class="fa fa-user fa-fw"></i> Datos Personales</a>
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
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="../php/actualizar_cvdatos.php" method="post" name="form1">
                                        <div class="form-group">
                                            <label>Apellido</label>
                                            <input type="text" name="apellido" class="form-control" value="<?php echo $apellido;?>">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->      
                                        </div>
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input  type="text" name="nombre" class="form-control" value="<?php echo $nombre;?>">                                         
                                        </div>
                                        <div class="form-group">
                                            <label>DNI</label>
                                            <input type="text" name="dni" class="form-control" value="<?php echo $dni;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>CUIL/CUIT</label>
                                            <input type="text" name="cuil" class="form-control" value="<?php echo $cuil;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nacionalidad</label>
                                            <input type="text" name="nacionalidad" class="form-control" value="<?php echo $nacionalidad;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Lugar de Nacimiento</label>
                                            <input type="text" name="lugar_nac" class="form-control" value="<?php echo $lugar_nac;?>">
                                        </div>
                                         <div class="form-group">
                                            <label>Fecha de Nacimiento</label>
                                            <input type="text" name="fecha_nac" class="form-control" value="<?php echo $fechaBD;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Domicilio</label>
                                            <input type="text" name="domicilio" class="form-control" value="<?php echo $domicilio;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Telefono Fijo</label>
                                            <input type="text" name="telefono" class="form-control" value="<?php echo $telefono;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input type="text" name="celular" class="form-control" value="<?php echo $celular;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" value="<?php echo $email;?>">
                                        </div>

										<div class="form-group">
                                            <label>Id Persona</label>
                                            <input type="text" name="id_persona" value="<?php echo $_GET['id_persona'];?>">
                                        </div>

                                        
                                        
                                        <td><input type="submit" name="update" value="Aceptar" class="btn btn-default"></td>
                                       
                                        <a href="../php/<leer_cvdatos.php" class="btn btn-default">Cancelar</a>
                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <form role="form">

                                        <div align="center" class="form-group">
                                            <img src="../images/default-user.png" width="200" height="200" >
                                        </div>

                                        <div align="center" class="form-group">
                                            <label>Buscar Foto</label>
                                            <input type="file">
                                        </div>
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


