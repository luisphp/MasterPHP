<?php 

	require_once 'models/producto.php';

	class productoController
	{
		public function index(){
			 $producto = new Producto();
			 $productos = $producto->getAny();
			 //var_dump($producto);

			require_once 'views/productos/destacados.php';
		}

		public function gestion(){

		Utils::isAdmin();

			

			$producto = new Producto();
			$productos = $producto->getAll();


			require_once 'views/productos/gestion.php';
		}

		public function crear(){

			Utils::isAdmin();

			require_once 'views/productos/crear.php';

		}


		//Método publico para registrar producto
		public function save(){

		Utils::isAdmin();	

		require_once 'models/producto.php';
			 
			 if(isset($_POST)){			 	

			 	//Validamos si llega algun campo vacio, en tal caso retornamos con un error en la sesion
			 	$nombre = isset($_POST['nombre']) ? $_POST['nombre']:false;

			 	$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion']:false;

			 	$precio = isset($_POST['precio']) ? $_POST['precio']:false;

			 	$stock = isset($_POST['stock']) ? $_POST['stock']:false;

			 	$categoria = isset($_POST['categoria']) ? $_POST['categoria']:false;

			 	//$imagen = isset($_POST['imagen']) ? $_POST['imagen']:false;

			 	//Validamos

			 	if($nombre && $descripcion && $precio && $stock && $categoria){

			 	//En caso de que todo este ok procedemos a guardar al usuario

			 	$producto = new Producto();
			 	$producto->setNombre($nombre);
			 	$producto->setDescripcion($descripcion);
			 	$producto->setPrecio($precio);
			 	//$producto->setOferta($oferta);
			 	$producto->setStock($stock);
			 	$producto->setFk_id_categoria($categoria);

			 	//var_dump($_POST, $_FILES['imagen']);
			 	//die();

			 	if(isset($_FILES['imagen'])){

				 	//NO se ha cerrado esta condicicon

				 	$file = $_FILES['imagen'];
					$file_name = $file['name'];
					$mimetype = $file['type'];

					//var_dump($file, $file_name, $mimetype);
					//die();

				 	if($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif'){

				 		if(!is_dir('uploads/images')){
				 			mkdir('uploads/images', 0777, true);
				 		}

				 		move_uploaded_file($file['tmp_name'], 'uploads/images/'.$file_name);

				 		$producto->setImagen($file_name);

				 	}	
			 	}
			 	
			 	if(isset($_GET['id'])){
			 		$id = $_GET['id'];
			 		$producto->setId_producto($id);

			 		$save = $producto->edit();
			 	}else{

			 		$save = $producto->save();
			 	}

			 	

			 	if($save){	

			 	//En caso de que se guarde sin error regresamos con una sesion exitosa

			 	$_SESSION['producto'] = "completed";

			 	}else{

			 	//En caso de que se NO se guarde regresamos con una sesion fallida
			 	$_SESSION['producto'] = "failed";

			 	}

			 	}else{
			 		$_SESSION['producto'] = "failed";
			 	}

			}else{

			 	//En caso de que se NO se guarde regresamos con una sesion fallida
			 	$_SESSION['producto'] = "failed";
			 	
			}

			 	//Regresamos  al formulario de registro
			header("Location:" .base_url.'producto/gestion');
		}

		//Editar un producto
		public function edit(){
			Utils::isAdmin();

			require_once 'models/producto.php';

			$edit = true;

			if(isset($_GET['id'])){

				$producto = new Producto();
				$producto->setId_producto($_GET['id']);
				$item = $producto->getOne();

			}

			require_once 'views/productos/crear.php';
			
		}


		//Borrar producto
		public function delete(){
			Utils::isAdmin();

			require_once 'models/producto.php';

			if(isset($_GET['id'])){

			$producto = new Producto();
			$producto->setId_producto($_GET['id']);
			$borrado = $producto->delete();

				if($delete){
					$_SESSION['delete'] = "completed";

				}else
				{
					$_SESSION['delete'] = "failed";
				}

			}else
				{
					$_SESSION['delete'] = "failed";
				}

			header("Location:".base_url."producto/gestion");
		}

		//Detalles de un producto
		public function ver(){

			if(isset($_GET['id'])){

				$producto = new Producto();
				$producto->setId_producto($_GET['id']);
				$producto = $producto->getOne();

			}

			require_once 'views/productos/detalle.php';
		}


	}


 ?>