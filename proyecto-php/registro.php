<?php 

	

	
	
	if(isset($_POST)){

		//Cargar conexion a la base de datos
		require_once 'includes/conexion.php';

		session_start();

		//Recoger los valores del formulario de registro

		$name = isset($_POST['Name']) ? $_POST['Name'] : false;

		$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : false;

		$email = isset($_POST['email']) ? $_POST['email'] : false;

		$password = isset($_POST['password']) ? $_POST['password'] : false;

		//Array de errores

		$errores = array();

		//Validar los dats antes de guardarlos en la base de datos
		
		//Validamos primero el nombre
		if(!empty($name) && !is_numeric($name)){
			
			$name_validation = true;
		}else{

			$name_validation = false;
			$errores['nombre'] = "El name no es valido";
		}

		//Validar el apellido
		if(!empty($lastName) && !is_numeric($lastName)){
			
			$lastName_validation = true;
		}else{

			$lastName_validation = false;
			$errores['apellido'] = "El apellido no es valido";
		}

		//Validar el email
		if(!empty($email) && !is_numeric($email)){
			
			$email_validation = true;
		}else{

			$email_validation = false;
			$errores['email'] = "El email no es valido";
		}

		//Validar el password
		if(!empty($password)){
			
			$password_validation = true;
		}else{

			$password_validation = false;
			$errores['password'] = "Debe añadir una contraseña";
		}

		//Validamos los mensajes de error
		//var_dump($errores);

		$guardar_user = false;

		if(count($errores)==0)
		{
			// Si todo esta bien insertamos los datos en la DB

			$guardar_user = true;

			$password_segura = password_hash($password, PASSWORD_BCRYPT, array ('cost'=> 10));

			//Mostrar contraseña
			//var_dump($password);

			//Mostrar la password cifrada
			//var_dump($password_segura);


			//Password verify
			//var_dump(password_verify($password, $password_segura));

			//die();

			$sql = "INSERT INTO `usuarios`(`name`, `lastname`, `email`, `password`) VALUES ($name,lastName,$email,CURDATE(),$password_segura);";

			$guardar = mysqli_query($db, $sql);

			if($guardar){
				$_SESSION['completado'] = "El registro se ha completado con exito";
			}
			else{
				$_SESSION['errores'] = "Fallo al guardar el usuario";
 			}



		}else{
			//Retornamos al formulario con un mensaje de error

			$_SESSION['errores'] = $errores;
			header('Location: index.php');



		}



	} 

	header("Location: index.php");


 ?>