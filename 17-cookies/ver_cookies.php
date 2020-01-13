<?php 


	/*
		Para ver el valor de las cookies, tengo que usar $_COOKIE, una variable super global, es un array asociativo
	*/

		if(isset($_COOKIE['micookie'])){
			echo $_COOKIE['micookie'];
		}

 ?>

  <a href="borrar_cookie.php">Borrar cookies</a>