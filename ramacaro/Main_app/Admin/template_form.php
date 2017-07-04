<?php
session_start();
include_once("config.php");
$relapersona = $_POST['id_persona'];
$asignatura = $_POST['catedra'];
$cargoBD = $_POST['cargo']; 
$DesdeBD = $_POST['Desde'];
$HastaBD = $_POST['Hasta'];
$AutoridadBD = $_POST['Autoridad'];
$FechaBD = $_POST['Fecha'];
$MontoBD = $_POST['Monto'];

$FechaBD = str_replace('/', '-', $FechaBD);
$fechaINS = date("Y-m-d", strtotime($FechaBD));
//insert data to database
$sql = "INSERT INTO contratos(rela_persona, asignatura, cargo, desde, hasta, autoridad, fecha, monto) VALUES(:rela_persona, :asignatura, :cargo, :desde, :hasta, :autoridad, :fecha, :monto)";
$query = $dbConn->prepare($sql);
$query->bindparam(':rela_persona', $relapersona);
$query->bindparam(':asignatura', $asignatura);
$query->bindparam(':cargo', $cargoBD);
$query->bindparam(':desde', $DesdeBD);
$query->bindparam(':hasta', $HastaBD);
$query->bindparam(':autoridad', $AutoridadBD);
$query->bindparam(':fecha', $fechaINS);
$query->bindparam(':monto', $MontoBD);
$query->execute();


require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\Style\Font;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('CONTRATO MODELO.docx');

$Fecha = $_POST['Fecha'];
$apellido = $_POST['apellido']; 
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$cuil = $_POST['cuil'];
$domicilio = $_POST['domicilio'];
$Autoridad = $_POST['Autoridad'];
$Desde = $_POST['Desde'];
$Hasta = $_POST['Hasta'];
$Monto = $_POST['Monto'];
$cargo = $_POST['cargo'];
$catedra = $_POST['catedra'];
$Carreras = $_POST['Carreras'];

// --- Asignamos valores a la plantilla
$templateWord->setValue('Fecha',$Fecha);
$templateWord->setValue('apellido',$apellido);
$templateWord->setValue('nombre',$nombre);
$templateWord->setValue('dni',$dni);
$templateWord->setValue('cuil',$cuil);
$templateWord->setValue('domicilio',$domicilio);
$templateWord->setValue('Desde',$Desde);
$templateWord->setValue('Hasta',$Hasta);
$templateWord->setValue('Monto',$Monto);
$templateWord->setValue('cargo',$cargo);
$templateWord->setValue('catedra',$catedra);
$templateWord->setValue('Carreras',$Carreras);
// --- Guardamos el documento
$templateWord->saveAs('CONTRATO-EXPORTADO.docx');

header("Content-Disposition: attachment; filename=Formulario.docx; charset=iso-8859-1");
echo file_get_contents('CONTRATO-EXPORTADO.docx');      
?>