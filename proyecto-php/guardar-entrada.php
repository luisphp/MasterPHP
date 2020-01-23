<?php 

	if(isset($_POST)){



		require_once 'includes/conexion.php';

		$titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db,  $_POST['titulo'] ) : false ;

		$categoria = isset($_POST['categoria']) ? mysqli_real_escape_string($db,  $_POST['categoria'] ) : false ;

		$descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db,  $_POST['descripcion'] ) : false ;
	
		//Array de errores

		$errores = array();

		if(!empty($titulo)){
			
			$titulo_validation = true;
		}else{

			$titulo_validation = false;
			$errores['titulo'] = "El título no es valido";
		}

		if(!empty($categoria)){
			
			$categoria_validation = true;
		}else{

			$categoria_validation = false;
			$errores['categoria'] = "La categoria no es valida";
		}

		if(!empty($descripcion)){
			
			$descripcion_validation = true;
		}else{

			$descripcion_validation = false;
			$errores['descripcion'] = "La descripcion no es valida";
		}

		$usuario = $_SESSION['usuario']['id_user'];

		if(count($errores)==0)
		{

			$sql = "INSERT INTO `entradas`(`fk_user_id`, `fk_category_id`, `title`, `description`, `fecha`) VALUES ('$usuario','$categoria','$titulo','$descripcion',CURDATE())";

			$guardar = mysqli_query($db, $sql);

			header("Location: index.php");


		}else{

			$_SESSION['errores-entrada'] = $errores;

			header("Location: crear-entrada.php");

		}

	}

	

	



 ?>