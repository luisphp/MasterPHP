<?php 

	function autocargar($clase_name){
		include 'controllers/' . $clase_name . '.php';

	}

	spl_autoload_register('autocargar');

	


	// define('ROOT', dirname(__FILE__));

	// define('DS', DIRECTORY_SEPARATOR);

	// spl_autoload_register('autoload');

	// function autoload($class){
	// 	$class = ROOT.DS.str_replace("\\",DS, $class);
	// }

	// require_once($class);

 ?>