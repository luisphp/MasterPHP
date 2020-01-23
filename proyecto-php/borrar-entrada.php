<?php
	require_once 'includes/conexion.php';
	if(isset($_SESSION['usuario']) && isset($_GET['id'])){
		$entrada_id = $_GET['id'];
		$user_id = $_SESSION['usuario']['id_user'];
		// var_dump($entrada_id);
		// echo "<br>";
		// var_dump($entrada_id);
		// die();
		$sql = "DELETE FROM `entradas`  WHERE fk_user_id = '$user_id' AND id_entrada = '$entrada_id'";
		$query = mysqli_query($db, $sql);
	}
		header("Location: index.php");
	
?>