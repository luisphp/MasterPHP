<?php 

	class Producto{

		private $id_producto;
		private $descripcion;
		private $precio;
		private $fk_id_categoria;
		private $stock;
		private $oferta;
		private $fecha;
		private $imagen;
		private $db;

		public function __construct(){
			$this->db = Database::connect();
		}

		public function getId_producto(){
		  return $this->id_producto;
		}

		public function setId_producto($id_producto){
		  $this->id_producto = $id_producto;
		}

		public function getDescripcion(){
		  return $this->descripcion;
		}

		public function setDescripcion($descripcion){
		  $this->descripcion = $descripcion;
		 }

		public function getPrecio(){
		  return $this->precio;
		}

		public function setPrecio($precio){
		  $this->precio = $precio;
		}

		public function getFk_id_categoria(){
		  return $this->fk_id_categoria;
		}

		public function setFk_id_categoria($fk_id_categoria){
		  $this->fk_id_categoria = $fk_id_categoria;
		}

		public function getStock(){
		  return $this->stock;
		}

		public function setStock($stock){
		  $this->stock = $stock;
		}

		public function getOferta(){
		  return $this->oferta;
		}

		public function setOferta($oferta){
		  $this->oferta = $oferta;
		}

		public function getFecha(){
		  return $this->fecha;
		}

		public function setFecha($fecha){
		  $this->fecha = $fecha;
		}

		public function getImagen(){
		  return $this->imagen;
		}

		public function setImagen($imagen){
		  $this->imagen = $imagen;
		}

		public function getDb(){
		  return $this->db;
		}

		public function setDb($db){
		  $this->db = $db;
		}


		public function getAll(){

			$productos = $this->db->query("SELECT * FROM productos ORDER BY id_producto DESC");

			return $productos;
		}






	}



 ?>