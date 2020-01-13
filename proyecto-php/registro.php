<?php 
	
	if(isset($_POST)){

		//Recoger los valores del formulario de registro

		$name = isset($_POST['Name']) ? $_POST['Name'] : false;

		$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : false;

		$email = isset($_POST['email']) ? $_POST['email'] : false;

		$password = isset($_POST['password']) ? $_POST['lastName'] : false;

		//Array de errores

		$errores = array();

		//validar los dats antes de guardarlos en la base de datos
		

		if(!empty($name) && !is_numeric($name)){
			
			$name_validation = true;
		}else{

			$name_validation = false;
			$errores['nombre'] = "El name no es valido";
		}



	} 



	



 ?>