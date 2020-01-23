<?php
	//Conexión
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "proyecto-php-puro";
	$db = mysqli_connect($server, $username, $password, $database);
	
	mysqli_query($db, "SET NAMES 'UTF-8");
	//Inicia la sesión;
	if(!isset($_SESSION)){
		session_start();
		}
?>