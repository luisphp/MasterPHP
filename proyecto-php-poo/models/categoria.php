<?php 
	
	class Categoria{


		require_once 'config/db.php'

		private $id_categoria;
		private $nombre;
		private $db;


		public function __construct(){

			$this->db = Database::connect();

		}

    /**
     * @return mixed
     */
    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    /**
     * @param mixed $id_categoria
     *
     * @return self
     */
    public function setIdCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    // Fin de la clase categoria

}



 ?>