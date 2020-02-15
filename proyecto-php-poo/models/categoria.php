<?php 

	class Categoria{

		private $id_categoria;
		private $nombre;
		private $db;


	public function __construct(){

		$this->db = Database::connect();

	}

    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    public function setIdCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }

    public function getNombre()
    {
        return $this->nombre;

    }

    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);
    }


    // Listar todas las categorias

    public function getAll(){

    	$categorias = $this->db->query("SELECT * from categorias ORDER BY id_categoria DESC");

    	return $categorias;
    }

    //Guardar nueva categoria

    public function save(){

    	$sql = "INSERT INTO `categorias`(`nombre`) VALUES ('{$this->getNombre()}')";

			$save =  $this->db->query($sql);

			$result = false;

			if($save){

				$result = true;
			}

			return $result;

    }


    // Fin de la clase categoria

}



 ?>