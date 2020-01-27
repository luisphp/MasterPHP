<?php 

	require_once 'clase.php';

	Configuracion::setColor("blue");
	Configuracion::setEntorno("Production");
	Configuracion::setNewsletter(true);

	echo Configuracion::$color."<br>";







 ?>