<?php 

	class Producto{

		//Propiedades de tipo privadas de esta clase 

		private $id_producto;
		private $nombre;
		private $descripcion;
		private $precio;
		private $fk_id_categoria;
		private $stock;
		private $oferta;
		private $fecha;
		private $imagen;
		private $db;

		//Getters y Setters de esta clase

		public function __construct(){
			$this->db = Database::connect();
		}

		public function getId_producto(){
		  return $this->id_producto;
		}

		public function setId_producto($id_producto){
		  $this->id_producto = $this->db->real_escape_string($id_producto);
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			 $this->nombre = $this->db->real_escape_string($nombre);
		}

		public function getDescripcion(){
		  return $this->descripcion;
		}

		public function setDescripcion($descripcion){
		  $this->descripcion = $this->db->real_escape_string($descripcion);
		 }

		public function getPrecio(){
		  return $this->precio;
		}

		public function setPrecio($precio){
		  $this->precio = $this->db->real_escape_string($precio);
		}

		public function getFk_id_categoria(){
		  return $this->fk_id_categoria;
		}

		public function setFk_id_categoria($fk_id_categoria){
		  $this->fk_id_categoria = $this->db->real_escape_string($fk_id_categoria);
		}

		public function getStock(){
		  return $this->stock;
		}

		public function setStock($stock){
		  $this->stock = $this->db->real_escape_string($stock);
		}

		public function getOferta(){
		  return $this->oferta;
		}

		public function setOferta($oferta){
		  $this->oferta = $this->db->real_escape_string($oferta);
		}

		public function getFecha(){
		  return $this->fecha;
		}

		public function setFecha($fecha){
		  $this->fecha = $this->db->real_escape_string($fecha);
		}

		public function getImagen(){
		  return $this->imagen;
		}

		public function setImagen($imagen){
		  $this->imagen = $this->db->real_escape_string($imagen);
		}

		public function getAll(){

			$productos = $this->db->query("SELECT * FROM productos ORDER BY id_producto DESC");

			return $productos;
		}

		public function getOne(){

			$producto = $this->db->query("SELECT * FROM productos WHERE id_producto = '{$this->getId_producto()}'");

			return $producto->fetch_object();
		}

		//Guardar un nuevo producto
		public function save(){

			$sql = "INSERT INTO `productos`( `nombre`, `descripcion`, `precio`, `fk_id_categoria`, `stock`, `oferta`, `fecha`, `imagen`) VALUES ('{$this->getNombre()}','{$this->getDescripcion()}','{$this->getPrecio()}', '{$this->getFk_id_categoria()}', '{$this->getStock()}', null , CURDATE(), '{$this->getImagen()}')";

			$save =  $this->db->query($sql);

			$result = false;

			if($save){

				$result = true;
			}

			// var_dump($result);
			// die();

			return $result;
		}

		//Editar un producto en especifico
		public function edit(){

			$sql = "UPDATE `productos` SET `nombre` = '{$this->getNombre()}', `descripcion`='{$this->getDescripcion()}', `precio` = '{$this->getPrecio()}', `fk_id_categoria`='{$this->getFk_id_categoria()}', `stock`='{$this->getStock()}', `oferta`= null, `fecha` = CURDATE() "; 
			

			if($this->getImagen() != null){
				$sql.= ",`imagen`= '{$this->getImagen()}' ";
			}

			$sql.= " WHERE id_producto = '{$this->getId_producto()}';";

			$update =  $this->db->query($sql);

			$result = false;

			if($update){

				$result = true;
			}
			
			//Ver error en base de datos con orientado a objetos
			//var_dump( $sql ,$this->db->error);
			//die();

			return $result;
		}

		//Borrar un producto en especifico
		public function delete(){

			$sql = "DELETE FROM `productos` WHERE id_producto = '{$this->getId_producto()}'";

			$delete = $this->db->query($sql);

			$result = false;

			if($delete){

				$result = true;
			}

			return $result;

		}

		//Seleccionar productos de forma aleatoria maximo 6
		public function getAny(){

			$productos = $this->db->query("SELECT * FROM `productos`  ORDER BY RAND()  LIMIT 6");

			return $productos;
		}

		//Selecctionar productos de una misma categoria
		public function getAllByCategory(){

		$sql = "SELECT p.*, c.nombre AS 'catNombre' FROM productos p"
		. " JOIN categorias c ON p.fk_id_categoria = c.id_categoria"
		. " WHERE p.fk_id_categoria = '{$this->getFk_id_categoria()}'";	

        $productos = $this->db->query($sql);

        //var_dump( $sql ,$this->db->error);
        //die();

        return $productos;

   		}






	}



 ?>