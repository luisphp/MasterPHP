<?php
	function mostrarError($errores, $campo){
		$alerta = "";
		if(isset($errores[$campo]) && !empty($campo)){
			$alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
		}else{
			//Code
		}
		return $alerta;
	}
	function borrarErrores(){
		$borrado = false;
		if(isset($_SESSION['errores'])){
			$_SESSION['errores'] = null;
			$borrado = true;
		}
		if(isset($_SESSION['completado'])){
			$_SESSION['completado'] = null;
			$borrado = true;
			
		}
		if(isset($_SESSION['error_login'])){
			$_SESSION['error_login'] = null;
			$borrado = session_unset();
		}
		if(isset($_SESSION['errores-entrada'])){
			$_SESSION['errores-entrada'] = null;
			$borrado = true;
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
	function findCategory($conexion, $id){
		
		$sql = "SELECT * FROM categorias WHERE `id_category`= '$id' ORDER BY  id_category DESC";
		$categorias = mysqli_query($conexion, $sql);
		$resultado = array();
		if($categorias && mysqli_num_rows($categorias) >= 1){
			$resultado = mysqli_fetch_assoc( $categorias) ;
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
	function getAllEntries($conexion){
		$sql = "SELECT e.*, c.* FROM  entradas e join categorias c on c.id_category = e.fk_category_id ORDER BY e.id_entrada DESC";
		$entradas = mysqli_query($conexion, $sql);
		$resultado = array();
		if($entradas && mysqli_num_rows($entradas) >= 1){
			$resultado = $entradas;
		}
		return $resultado;
	}
	function getAllEntriesByCat($conexion, $category){
		$sql = "SELECT e.*, c.* FROM  entradas e join categorias c on c.id_category = e.fk_category_id WHERE c.id_category = $category ORDER BY e.id_entrada DESC";
		$entradas = mysqli_query($conexion, $sql);
		$resultado = array();
		if($entradas && mysqli_num_rows($entradas) >= 1){
			$resultado = $entradas;
		}
		return $resultado;
	}
	function findEntry($conexion, $id){
		
		$sql = "SELECT * FROM entradas WHERE `id_entrada`= '$id'";
		$entradas = mysqli_query($conexion, $sql);
		$resultado = array();
		if($entradas && mysqli_num_rows($entradas) >= 1){
			$resultado = mysqli_fetch_assoc( $entradas) ;
		}
		return $resultado;
			}
	function getEntryById($conexion, $id_entry){
		$sql = "SELECT e.*, c.name as category_name, u.* FROM  entradas e join categorias c on c.id_category = e.fk_category_id join usuarios u on e.fk_user_id = u.id_user  WHERE e.id_entrada = '$id_entry'";
		$entradas = mysqli_query($conexion, $sql);
		$resultado = array();
		if($entradas && mysqli_num_rows($entradas) >= 1){
			$resultado = $entradas;
		}
		return $resultado;
		}
?>