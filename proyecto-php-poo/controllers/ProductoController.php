<?php 

	class productoController
	{
		public function index(){
			 //echo "Controlador de producto Test, Acción Index";

			require_once 'views/productos/destacados.php';
		}

		public function gestion(){

			Utils::isAdmin();

			require_once 'models/producto.php';

			$producto = new Producto();
			$productos = $producto->getAll();


			require_once 'views/productos/gestion.php';
		}

		public function crear(){

		Utils::isAdmin();

			require_once 'views/productos/crear.php';	




		}
	}


 ?>