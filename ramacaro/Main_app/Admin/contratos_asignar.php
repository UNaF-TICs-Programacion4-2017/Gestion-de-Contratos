<?php
    session_start();
    //including the database connection file
    include_once("config.php");

    //fetching data in descending order (lastest entry first)
    //$result = $dbConn->query("SELECT id_persona, apellido, nombre, dni, cuil, domicilio FROM datos_personas INNER JOIN usuarios ON datos_personas.rela_usuario=usuarios.Cod_usuario WHERE Tipo_usuario = 'User'");
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
                        <h1 class="page-header">Generacion del Contrato</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Datos del Contrato</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="template_form.php" method="post" name="form1">
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="text" name="Fecha" class="form-control" value="" required>
                                        </div>
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
                                            <label>Domicilio</label>
                                            <input type="text" name="domicilio" class="form-control" value="<?php echo $domicilio;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Autoridad/Decano</label>
                                            <input type="text" name="Autoridad" class="form-control" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha Desde</label>
                                            <input type="text" name="Desde" class="form-control" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha Hasta</label>
                                            <input type="text" name="Hasta" class="form-control" value="" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Monto</label>
                                            <input type="text" name="Monto" class="form-control" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Cargo</label>
                                            <select name="cargo" class="form-control">
                                                <option value="Profesor Titular">Profesor Titular</option>
                                                <option value="Profesor Adjunto">Profesor Adjunto</option>
                                                <option value="Profesor Asociado">Profesor Asociado</option>
                                                <option value="Jefe de Trabajos practicos">Jefe de trabajos practicos</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cátedra</label>
                                            <select name="catedra" class="form-control">
                                                <option value="Matematica 1">Matematica 1</option>
                                                <option value="Matematica 2">Matematica 2</option>
                                                <option value="Programacion 1">Programacion 1</option>
                                                <option value="Programacion 2">Programacion 2</option>
                                                <option value="Programacion 3">Programacion 3</option>
                                                <option value="Programacion 4">Programacion 4</option>
                                                <option value="Base de datos 1">Base de datos</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Carreras</label>
                                            <select name="Carreras" class="form-control">
                                                <option value="Lic. en TIC">Lic. en TIC</option>
                                                <option value="Lic. en Admin. de Empresas Agropecuarias">Lic. en Admin. de Empresas Agropecuarias</option>
                                            </select>    
                                        </div>
                                        <div class="form-group">
                                            <label>Id Persona</label>
                                            <input type="text" name="id_persona" value="<?php echo $_GET['id_persona'];?>" readonly="readonly">
                                        </div>

                                        <td><input type="submit" style="font-weight:bold;" name="update" value="ASIGNAR" class="btn btn-default"></td>
                                       
                                        <a href="index.php" class="btn btn-default">Cancelar</a>
                                        
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
