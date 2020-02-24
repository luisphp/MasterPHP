<?php


	//Inicia la sesion para mostrar mensajes al usuario guardados en las variables de sesiones

	session_start();

	require_once 'autoload.php';
	require_once 'config/db.php';
	require_once 'helpers/utils.php';
	require_once 'config/parameters.php';
	require_once 'views/layouts/header.php';
	require_once 'views/layouts/sidebar.php';

	//Instanciando el objeto de la clase
	//$controlador = new UsuarioController();
	
	//Llamando al metodo en especifico y directamente
	//$controlador->crear();

	

	function showError(){
		$error = new errorController();
		$error->index();
	}




if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';
	}
	elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$nombre_controlador = controller_default;

	}
	else{
	// echo "<h1>Controller no esta seteado</h1>";
	// exit();
	showError();
}
	if(class_exists($nombre_controlador)){
		
		$controlador = new $nombre_controlador();

	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
		
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$action_default = action_default;
		$controlador->$action_default();
		
	}else{
		//echo var_dump($controlador);
		//echo var_dump($action);
		// echo "<h1>La pagina no existe Lv1</h1>";
		showError();
		}
	}else{
		// echo "<h1>La pagina no existe Lv2</h1>";
		showError();
	}




	require_once 'views/layouts/footer.php';

	//Numero de tarjeta:
	//Fecha de vencimiento: 
	//

?>
