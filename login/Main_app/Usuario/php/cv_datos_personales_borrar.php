<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id_persona = $_GET['id_persona'];

//deleting the row from table
$sql = "DELETE FROM datos_personas WHERE id_persona=:id_persona";
$query = $dbConn->prepare($sql);
$query->execute(array(':id_persona' => $id_persona));

//redirecting to the display page (index.php in our case)
header("Location:../php/cv_datos_personales_leer.php");
?>
