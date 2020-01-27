s<?php
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
		$id_ent = $_GET['id_entrada'];
		if(count($errores)==0)
		{
			if(isset($_GET['editar'])){
			$sql = "UPDATE `entradas` SET `fk_category_id`='$categoria',`title`='$titulo',`description`='$descripcion' WHERE fk_user_id='$usuario' AND id_entrada='$id_ent'";	
			}else{
			$sql = "INSERT INTO `entradas`(`fk_user_id`, `fk_category_id`, `title`, `description`, `fecha`) VALUES ('$usuario','$categoria','$titulo','$description',CURDATE())";
			}
			$guardar = mysqli_query($db, $sql);
			header("Location: index.php");
		}else{
			$_SESSION['errores-entrada'] = $errores;
			if(isset($_GET['editar'])){
			header("Location: editar-entrada.php?id=".$id_ent);	
			}
			header("Location: editar-entrada.php?id=".$id_ent);
		}
	}
	
	
?>