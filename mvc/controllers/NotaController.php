<?php 

	class NotaController{

		public $nombre;
		public $contenido;

    public function listar(){
        //Modelo
        require_once 'models/nota.php';

        //Logica de la accion del controlador
        $nota = new Nota();
        //$nota->setNombre("Nota de MVC php");
        //$nota->setContenido("Contenido de la nota");

        $notas = $nota->conseguirTodos('notas');

        //Vista

        require_once 'views/notas/listar.php';
    }    

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    public function crear(){
        //Modelo
        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setFkUserId(1);
        $nota->setTitle("Enviar cartas de trabajo");
        $nota->setDescription("Mander el correo con todos los detalles");
        $guardar = $nota->guardarNota();

        //Mostrar algun error en caso de que exista
        echo $nota->db->error;
        die();




        header("Location: index.php?controller=Nota&action=Listar");

    }
}


 ?>