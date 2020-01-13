<?php 

/*
	Es un fichero que se almacena en el ordenador del usuario 
*/

	//Para crear cookies

	//setcookie("name", "Valor que solo puede ser texto", caducidad, ruta, dominio);

	//Cookie basica
	setcookie("micookie", "valor de mi galleta");

	//Cookie con expiracion
	setcookie("micoolie2", "valor de mi galleta", time()+(60*60*24*365));

 ?>

 <a href="ver_cookies.php">Ver cookies</a>