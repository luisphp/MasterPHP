

<?php 

	function mostrarError($errores, $campo){

		$alerta = "";

		if(isset($errores[$campo]) && !empty($campo)){
			$alerta = "<div class='alerta alerta-error'>".$errores[$campo]."<div>";
		}else{

			//Code
		}

		return $alerta;

	}

	function borrarErrores(){

		$borrado = false;

		if(isset($_SESSION['errores'])){

			$_SESSION['errores'] = null;
			$borrado = session_unset();

		}

		if(isset($_SESSION['completado'])){
			$_SESSION['completado'] = null;
			session_unset();
		}

		if(isset($_SESSION['error_login'])){
			$_SESSION['error_login'] = null;
			session_unset();
		}

		return $borrado;
	}

	function getCategories($conexion){

		

		$sql = "SELECT * FROM categorias ORDER BY id_category ASC";

		$categorias = mysqli_query($conexion, $sql);

		$resultado = array();

		if($categorias && mysqli_num_rows($categorias) >= 1){

			$resultado = $categorias;

		}

		return $resultado;

		

	}

	function getLatestEntries($conexion){

		$sql = "SELECT e.*, c.* FROM  entradas e join categorias c on c.id_category = e.fk_category_id ORDER BY e.id_entrada DESC LIMIT 4";

		$entradas = mysqli_query($conexion, $sql);

		$resultado = array();

		if($entradas && mysqli_num_rows($entradas) >= 1){

			$resultado = $entradas;

		}

		return $resultado;

	}



 ?>