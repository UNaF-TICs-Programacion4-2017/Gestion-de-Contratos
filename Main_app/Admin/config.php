<?php

$databaseHost = 'localhost';
$databaseName = 'db_gestion_contratos';
$databaseUsername = 'root';
$databasePassword = '';

try {
	
	$dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);
	
	$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
	
} catch(PDOException $e) {
	echo $e->getMessage();
}
 
?>
