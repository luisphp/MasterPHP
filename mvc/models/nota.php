<?php 

    require_once 'models/modelobase.php';
    
    class Nota extends ModeloBase{

       public $fk_user_id;
       public $title; 
       public $description;

    public function __construct(){
        parent::__construct();
    }
    

    public function getFkUserId()
    {
        return $this->fk_user_id;
    }

    public function setFkUserId($fk_user_id)
    {
        $this->fk_user_id = $fk_user_id;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function guardarNota()
    {
        $sql = "INSERT INTO `notas`(`fk_user_id`,`title`, `description`, `fecha`) VALUES ('$this->fk_user_id','$this->title','$this->description',CURDATE())";



        $guardado = $this->db->query($sql);

        return $guardado;
    }
}



 ?>