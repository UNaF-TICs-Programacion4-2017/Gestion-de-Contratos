<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id_ant_lab = $_GET['id_ant_lab'];

//deleting the row from table
$sql = "DELETE FROM antecedentes_laborales WHERE id_ant_lab=:id_ant_lab";
$query = $dbConn->prepare($sql);
$query->execute(array(':id_ant_lab' => $id_ant_lab));

//redirecting to the display page (index.php in our case)
header("Location:../php/cv_antecedentes_laborales_leer.php");
?>
