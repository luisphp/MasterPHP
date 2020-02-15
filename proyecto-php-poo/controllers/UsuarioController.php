<?php 

	require_once 'models/usuario.php';

	class usuarioController
	{
		//Texto de pruebas para index de usuarios
		public function index(){
			 echo "Controlador de usuarios Test, Acción Index";
		}

		//Llenar vista con formulario para registro de usuario
		public function registro(){
			 require_once 'views/usuario/registro.php';
		}

		//Método publico para registrar usuario
		public function save(){
			 if(isset($_POST)){
			 	// var_dump($_POST);


			 	//Validamos si llega algun campo vacio, en tal caso retornamos con un error en la sesion
			 	$nombre = isset($_POST['nombre']) ? $_POST['nombre']:false;

			 	$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos']:false;

			 	$email = isset($_POST['email']) ? $_POST['email']:false;

			 	$password = isset($_POST['password']) ? $_POST['password']:false;

			 	//Validamos

			 	if($nombre && $apellidos && $email && $password){

			 		//En caso de que todo este ok procedemos a guardar al usuario

			 	$usuario = new Usuario();
			 	$usuario->setNombre($nombre);
			 	$usuario->setApellidos($apellidos);
			 	$usuario->setEmail($email);
			 	$usuario->setPassword($password);
			 	$save = $usuario->save();

			 	if($save){	

			 		//En caso de que se guarde sin error regresamos con una sesion exitosa

			 		$_SESSION['register'] = "completed";

			 	}else{

			 		//En caso de que se NO se guarde regresamos con una sesion fallida
			 		$_SESSION['register'] = "failed";
			 	}

			 	}
			 	

			 }else{

			 	//En caso de que se NO se guarde regresamos con una sesion fallida
			 	$_SESSION['register'] = "failed";
			 	
			 }

			 //Regresamos  al formulario de registro
			 header("Location:" .base_url.'usuario/registro');
		}

		//Método para logear un usuario
		public function login(){

			if(isset($_POST)){
				//Identificar al usuario

				//1- Generar consulta a la base de datos

				$usuario = new Usuario();
				$usuario->setEmail($_POST['email']);
				$usuario->setPassword($_POST['password']);

				$identity = $usuario->login();


				//var_dump($identity);
				//die();


				if($identity && is_object($identity)){
					$_SESSION['identity'] = $identity;

					if($identity->role == 'admin'){
						$_SESSION['admin'] = true;
					}
				}else{
					$_SESSION['error_login'] = 'Identificacion fallida';
				}

			}
			//Regresamos  al index (login)
			header("Location:".base_url);

		}
		// Cerrar sesion
		public function logout(){

			if(isset($_SESSION['identity'])){
				unset($_SESSION['identity']);
			}

			if(isset($_SESSION['admin'])){
				unset($_SESSION['admin']);
			}

			header("Location:".base_url);

		}
	}
// Fin de la clase

 ?>