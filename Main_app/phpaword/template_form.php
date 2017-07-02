<?php

require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('plantilla.docx');
 
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$municipio = $_POST['municipio'];
$provincia = $_POST['provincia'];
$cp = $_POST['cp'];
$telefono = $_POST['telefono'];


// --- Asignamos valores a la plantilla
$templateWord->setValue('nombre_empresa',$nombre);
$templateWord->setValue('direccion_empresa',$direccion);
$templateWord->setValue('municipio_empresa',$municipio);
$templateWord->setValue('provincia_empresa',$provincia);
$templateWord->setValue('cp_empresa',$cp);
$templateWord->setValue('telefono_empresa',$telefono);

// --- Guardamos el documento
$templateWord->saveAs('Formulario.docx');

header("Content-Disposition: attachment; filename=Formulario.docx; charset=iso-8859-1");
echo file_get_contents('Formulario.docx');
        
?>