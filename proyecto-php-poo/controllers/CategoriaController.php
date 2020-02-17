<?php 

	require_once 'models/categoria.php';
	require_once 'models/producto.php';

	class categoriaController
	{

		public function index(){

			//Comprobar que el role del usuario es administrador
			Utils::isAdmin();

			$categoria = new Categoria();
			$categorias = $categoria->getAll();

			require_once 'views/categoria/index.php';
		}

		public function crear(){

			//Comprbar que el role del usuario es administrador
			Utils::isAdmin();

			//Cargamos la vista de la administracion de categorias 
			require_once 'views/categoria/crear.php';
		}

		public function save(){
			
			Utils::isAdmin();

			//Guardar categoria en la base de datos
			if(isset($_POST)){
			 	 // var_dump($_POST);
			 	 // die();

			 	//Validamos si llega algun campo vacio, en tal caso retornamos con un error en la sesion
			 	$nombre = isset($_POST['nombre']) ? $_POST['nombre']:false;

			 	//Validamos
			 	if($nombre){

			 		//En caso de que todo este ok procedemos a guardar la categoria

			 	$categoria = new Categoria();
			 	$categoria->setNombre($nombre);
			 	$save = $categoria->save();


			 	//TO DO: 
			 	// if($save){	

			 	// 	//En caso de que se guarde sin error regresamos con una sesion exitosa

			 	// 	$_SESSION['guardado'] = "completed";

			 	// }else{

			 	// 	//En caso de que se NO se guarde regresamos con una sesion fallida
			 	// 	$_SESSION['guardado'] = "failed";

			 	// 	 }

			 	 }

			header("Location:".base_url.'categoria/index');

			}
		}

		//Listar productos de una misma categoria
		public function ver(){

			if(isset($_GET['id'])){

			//Buscar la categoria seleccionada por id	
			$id = $_GET['id'];
			$categoria = new Categoria();
			$categoria->setIdCategoria($id);
			$categoria_selected = $categoria->getOne();
			

			//Buscar los productos asociados a esa categoria
			$productos = new Producto();
			$productos->setFk_id_categoria($id);
			$productos = $productos->getAllByCategory();
			}

			require_once 'views/categoria/ver.php';
		}
	}

 ?>