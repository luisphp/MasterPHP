<?php 

	if(isset($_POST)){

		require_once 'includes/conexion.php';

		$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,  $_POST['nombre'] ) : false ;
	
		//Array de errores

		$errores = array();

		if(!empty($nombre) && !is_numeric($nombre)){
			
			$nombre_validation = true;
		}else{

			$nombre_validation = false;
			$errores['nombre'] = "El name no es valido";
		}

		if(count($errores)==0)
		{

			$sql = "INSERT INTO `categorias`(`name`) VALUES ('$nombre')";

			$guardar = mysqli_query($db, $sql);


		}

	}

	header("Location: index.php");



 ?>