<?php 

	//Inciciar la sesion y la conexion a la base de datos

	require_once('includes/conexion.php');

	//recoger los datos del formulario

	if(isset($_POST)){

		//Borrar error antiguo

		if(isset($_SESSION['error_login'])){
					unset($_SESSION['error_login']);
			}

		//Recoger datos del formulario	
		$email = trim($_POST['email']);

		$password = $_POST['password'];

		//Consulta para comprobar las credenciales del usuario

		$sql = "SELECT * FROM usuarios WHERE email = '$email'";

		$login = mysqli_query($db, $sql);

		if($login && mysqli_num_rows($login) == 1){

			$usuario = mysqli_fetch_assoc($login);
			 /*var_dump($usuario);
			 die(); */
			

			//Comprobar la contraseña / cifrar
			$verify = password_verify($password, $usuario['password']);

			if($verify){

				// Utilizar una sesion para guardar los datos del usuario logeado

					$_SESSION['usuario'] = $usuario;

			}else{

				$_SESSION['error_login'] = "Login incorrecto 1, error:  ".strval($verify);

				/*
					Verificacion de errores 

				var_dump($verify);
				echo "<br><b4>";
				var_dump($password);
				echo "<br><b4>";
				var_dump(password_hash($password, PASSWORD_DEFAULT));
				echo "<br><b4>";
				var_dump($usuario['password']);
				die();
				*/
			}

			
		}else{

			//Mensaje de error

			$_SESSION['error_login'] = "Login incorrecto 2";
		}

	}

	//Comprobar la contraseña

	//Consulta para comprobar las credenciales del usuario

	

	//Si algo falla crear una sesion con el fallo

	//Redirigir al index

	
	header("Location: index.php");


 ?>