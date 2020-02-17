<?php 

	require_once 'models/producto.php';
	require_once 'helpers/utils.php';

	class cartController
	{
		public function index(){

			//$cart = $_SESSION['cart'] = null;

			require_once 'views/cart/index.php';
			 			
		}

		public function add(){

			//Verificar si llega el id de la URL
			if($_GET['id']){

				$producto_id = $_GET['id'];

				}else{
					
					//En caso de que este vacio redireccionamos al index
					header("Location:".base_url);
				}	

			//En caso de que se trate de añadir el mismo items 2 veces o mas, aumentamos las "unidades"		
			if(isset($_SESSION['cart'])){

				$counter = 0;

				foreach ($_SESSION['cart'] as $index => $value) {
					if($value['id_producto'] == $producto_id){
						$_SESSION['cart'][$index]['unidades']++;
						$counter++;
					} 
				}

			}

			if(!isset($counter) || $counter == 0){

				//Conseguir producto

				$producto = new Producto();
				$producto->setId_producto($_GET['id']);
				$producto = $producto->getOne();
				

				//Añadir el item al cart	
				if(is_object($producto)){
					$_SESSION['cart'][] = array(
						"id_producto" => $producto->id_producto,
						"precio" => $producto->precio,
						"unidades" => 1,
						"producto" => $producto,
					);
				}
			}

			header("Location:".base_url."cart/index");

		}

		public function remove(){

		}

		public function delete_all(){
			
			Utils::deleteSession('cart');

			header("Location:".base_url."cart/index");
		}
	}


 ?>