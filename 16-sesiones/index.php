
<?php 
	


/*
	Sesiones en PHP
*/

	//Inicio de sesion 

	session_start();

	$variable_normal = "Soy una variable";

	$_SESSION['variable_persistente'] = "Hola soy una sesion activa";

	echo $variable_normal."<br><br>";

	echo $_SESSION['variable_persistente']."<br><br>";



 ?>