<?php 

	if(!empty($_POST)){

		require_once 'includes/conexion.php';

		$nombre = iseet($_POST['nombre']) ? mysqli_real_escape($db,  $_POST['nombre'] ) : false );
	
		//Array de errores

		$errores = array();

		if(!empty($nombre) && !is_numeric($nombre)){
			
			$nombre_validation = true;
		}else{

			$nombre_validation = false;
			$errores['nombre'] = "El name no es valido";
		}

		$guardar_user = false;

		if(count($errores)==0)
		{

			$guardar_user = true;

			$sql = "INSERT INTO `usuarios`(`name`, `lastname`, `email`, `fecha`,`password`) VALUES ('$name','$lastName','$email',CURDATE(),'$password_segura')";

			$guardar = mysqli_query($db, $sql);


		}

	}



 ?>