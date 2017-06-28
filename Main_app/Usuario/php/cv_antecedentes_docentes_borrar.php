<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id_ant_doc = $_GET['id_ant_doc'];

//deleting the row from table
$sql = "DELETE FROM antecedentes_docentes WHERE id_ant_doc=:id_ant_doc";
$query = $dbConn->prepare($sql);
$query->execute(array(':id_ant_doc' => $id_ant_doc));

//redirecting to the display page (index.php in our case)
header("Location:../php/cv_antecedentes_docentes_leer.php");
?>
