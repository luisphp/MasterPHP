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

		public static function StatusCart(){

			if(!isset($_SESSION['cart'])){

				$stats = array(
					'total' => 0,
					'count' => 0,

				);

			}elseif(isset($_SESSION['cart'])){

				$stats = array(
					'total' => 0,
					'count' => 0,
				);

				$total = 0;

				$cantidad = count($_SESSION['cart']);


				foreach ($_SESSION['cart'] as $key => $producto) {
					$total += $producto['precio']*$producto['unidades'];
				}

				$stats = array(
					'total' => $total,
					'count' => $cantidad,
				);





			}

			return $stats;	

		}

		public static function showStatus($status){

			$value = 'pendiente'; 

			if($status == 'confirm'){

				$value = 'pendiente';


			}elseif($status == 'preparation'){
				$value = 'pendiente';
			}elseif($status == 'preparation'){
				$value = 'En preparacion';
			}elseif($status == 'ready'){
				$value = 'preparado';
			}elseif($status == 'sended'){
				$value = 'enviado';
			}

			return $value;
		}
	}



 ?>