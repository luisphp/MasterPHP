<?php 

	class Utils{

		public static function deleteSession($session_name){

			if(isset($_SESSION[$session_name])){

				$_SESSION[$session_name] = null;
				unset($_SESSION[$session_name]);

			}

			return $session_name;
			
		}
		public static function isAdmin(){
			if(!isset($_SESSION['admin'])){
				header("Location:".base_url);
			}else{
				return true;
			}	
		}

		public static function showCategories(){

			require_once 'models/categoria.php';

			$categoria = new Categoria();
			$categorias = $categoria->getAll();
			return $categorias;


		}

		public static function cart(){

			if(isset($_SESSION['cart'])){

				$stats = array(
					'total' => 0,
					'count' => 0,

				);

			}elseif(isset($_SESSION['cart'])){

				$stats = array(
					'total' => '',
					'count' => count($_SESSION['cart']),
				);
			}	

		}
	}



 ?>