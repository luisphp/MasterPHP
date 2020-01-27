<?php 
	
	//Herencia: Es la posibilidad de compartir atributos y metodos entre clases

	class Persona {

		public $nombre;
		public $apellidos;
		public $altura;
		public $edad;

	
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

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     *
     * @return self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     *
     * @return self
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     *
     * @return self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function hablar(){
    	return "Estoy hablando";
    }

    public function caminar(){
    	return "Estoy caminando";
    }

}
	/**
	 * 
	 */
	class Informatico
	{
		public $lenguaje;

		public function __construct(
                        
                        ){
			$this->lenguajes = "HTML , CSS, JS";
		}
                
    
                
                

		public function sabeLenguajes($lenguajes){
			$this->lenguajes = $lenguajes;

			return $this->lenguajes;
		}

		public function programar(){

			return "Soy programador";
		}

		public function repararOrdenador(){
			
			return "Reparo PCs";
		}

		public function hacerofimatica(){
			
			return "Estoy haciendo ofimatica";
		}
		
		
	}


 ?>