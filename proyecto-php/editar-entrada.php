<?php
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
require_once 'includes/conexion.php';
	$entrada = findEntry($db, $_GET['id']);
	if(!isset($entrada["id_entrada"])){header("Location: index.php");}
?>
	
	<h1></h1>



<?php require_once 'includes/pie.php'; ?>