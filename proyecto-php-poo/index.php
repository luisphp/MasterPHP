<?php
	
	//require_once 'controllers/usuario.php';
	//require_once 'controllers/nota.php';

	require_once 'autoload.php';
	//Instanciando el objeto de la clase
	//$controlador = new UsuarioController();
	
	//Llamando al metodo en especifico y directamente
	//$controlador->crear();
if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';
	}else{
	echo "<h1>Controller no esta seteado</h1>";
	exit();
}
	if(class_exists($nombre_controlador)){
		
		$controlador = new $nombre_controlador();

	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
		
	}else{
		//echo var_dump($controlador);
		//echo var_dump($action);
		echo "<h1>La pagina no existe Lv1</h1>";
		}
	}else{
		echo "<h1>La pagina no existe Lv2</h1>";
	}






?>