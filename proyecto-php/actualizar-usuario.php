<?php
	if(isset($_POST)){
		require_once 'includes/conexion.php';
		$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,  $_POST['nombre'] ) : false;
		$apellido = isset($_POST['apellido']) ? mysqli_real_escape_string($db,  $_POST['apellido'] ) : false;
		$email = isset($_POST['email']) ? mysqli_real_escape_string($db,  $_POST['email'] ) : false;
	
		//Array de errores
		$errores = array();
		if(!empty($nombre)){
			
			$nombre_validation = true;
		}else{
			$nombre_validation = false;
			$errores['nombre'] = "El nombre no es valido";
		}
		if(!empty($apellido)){
			
			$apellido_validation = true;
		}else{
			$apellido_validation = false;
			$errores['apellido'] = "El apellido no es valido";
		}
		$usuario = $_SESSION['usuario']['id_user'];
		//Verificamos que el correo no lo tenga registrado otro usuario
		$consulta = "SELECT `email` FROM `usuarios` WHERE `email` = '$email' ";
		$buscar = mysqli_query($db, $consulta);
		$isset_user = mysqli_fetch_assoc($buscar);
		// var_dump($iseet_user);
		// if($iseet_user == null){ echo "No existe"}else{echo "Si existe"}
		// die();
		if(!empty($email) && $isset_user == null ){
			
			$email_validation = true;
		}else{
			$email_validation = false;
			$errores['email'] = "El email: ".$email." ya esta registrado";
		}
		
		if(count($errores)==0)
		{
			$sql = "UPDATE `usuarios` SET `name`='$nombre',`lastname`='$apellido', `email`='$email'  WHERE `id_user`= '$usuario'";
			$guardar = mysqli_query($db, $sql);
			//header("Location: mis-datos.php");
			if($guardar){
				$_SESSION['usuario']['name'] = $nombre;
				$_SESSION['usuario']['lastname'] = $apellido;
				$_SESSION['usuario']['email'] = $email;
				$_SESSION['completado'] = "Tus datos se han actualizado correctamente";
				header("Location: mis-datos.php");
			}else{
					$_SESSION['errores']['general'] = "Fallo al actualizar los datos";
			}
		}else{
			$_SESSION['errores'] = $errores;
			header("Location: mis-datos.php");
		}
	}
	
	
?>