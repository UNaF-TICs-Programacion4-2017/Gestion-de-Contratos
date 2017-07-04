<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id_titulo = $_GET['id_titulo'];

//deleting the row from table
$sql = "DELETE FROM titulos_obtenidos WHERE id_titulo=:id_titulo";
$query = $dbConn->prepare($sql);
$query->execute(array(':id_titulo' => $id_titulo));

//redirecting to the display page (index.php in our case)
header("Location:../php/cv_estudios_cursados_leer.php");
?>
