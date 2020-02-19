<?php 
	require_once 'models/pedido.php';

	class pedidoController
	{
		public function hacer(){
			 require_once 'views/pedido/hacer.php';
		}

		public function add(){

			if(isset($_SESSION['identity'])){

				
				//Comprobar datos de usuario logeado y monto total de los items en el carrito
				$fk_id_usuario = $_SESSION['identity']->id_usuario;
				$status = Utils::StatusCart();
				$coste = $status['total'];

				//Comprobacion de datos de formulario
				$provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
				$localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
				$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;

				if($provincia && $direccion && $direccion){

				//Setter datos en la clase

				$pedido = new Pedido();
				$pedido->setProvincia($provincia);
				$pedido->setLocalidad($localidad);
				$pedido->setDireccion($direccion);
				$pedido->setFkIdUsuario($fk_id_usuario);
				$pedido->setCoste($coste);
				$pedido->setEstado('confirmado');

				//Guardar pedido
				$save = $pedido->save();

				//Guardar linea pedido
				$save_linea = $pedido->saveLinea();

				if($save && $save_linea){

					$_SESSION['pedido'] = 'Completo';

				}else{
					$_SESSION['pedido'] = 'Failed';
				}

				}else{

					$_SESSION['pedido'] = 'Failed';
				}

				


			}else{
				//Rediriguir al index
				header("Location:".base_url);
			}

			header("Location:".base_url."pedido/confirmado");

		}

		public function confirmado(){

			if(isset($_SESSION['identity'])){

				$pedido = new Pedido();
				$pedido->setFkIdUsuario($_SESSION['identity']->id_usuario);
				$pedido = $pedido->getOneByUser();
				
			}

			



			require_once 'views/pedido/confirmado.php';
		}

}

 ?>