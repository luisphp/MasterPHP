<?php 

	class usuario{

		private $id_usuario;
		private $nombre;
		private $apellidos;
		private $email;
		private $password;
		private $role;
		private $imagen;
		private $db;

		public function __construct(){

			$this->db = Database::connect();

			//var_dump($this->db);
			//die();
		}

		function setId_usuario($id_usuario) { 
			$this->id_usuario = $id_usuario; 
		}

		function getId_usuario() { 
			return $this->id_usuario; 
		}

		function setNombre($nombre) { 
			$this->nombre = $this->db->real_escape_string($nombre); 
		}

		function getNombre() { 
			return $this->nombre; 
		}

		function setApellidos($apellidos) { 
			$this->apellidos = $this->db->real_escape_string($apellidos);  
		}

		function getApellidos() { 
			return $this->apellidos; 
		}
		
		function setEmail($email) { 
			$this->email = $this->db->real_escape_string($email); 
		}
		
		function getEmail() { 
			return $this->email; 
		}
		
		function setPassword($password) { 
			$this->password = $password; 
		}
		
		function getPassword() {
			return password_hash($this->password, PASSWORD_BCRYPT, ['cost' => 4]); 
		}
		
		function setRole($role) { 
			$this->role = $role; 
		}

		function getRole() { 
			return $this->role; 
		}
		
		function setImagen($imagen) { 
			$this->imagen = $imagen; 
		}

		function getImagen() { 
			return $this->imagen; 
		}

		public function save(){

			$sql = "INSERT INTO `usuarios`(`nombre`, `apellidos`, `email`, `password`, `role`, `imagen`) VALUES ('{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}', '{$this->getPassword()}', 'user', null)";

			$save =  $this->db->query($sql);

			$result = false;

			if($save){

				$result = true;
			}

			return $result;
		}

		public function login(){

			//Marcamos una variable resultado para control de acceso 
			$result = false;

			$email = $this->email;
			$password = $this->password;

			//Comprobar si existe el usuario
			$sql = "SELECT * FROM usuarios WHERE email = '$email'";

			$login = $this->db->query($sql);

			if($login && $login->num_rows == 1){

			$usuario = $login->fetch_object();



				//Verificar la contraseña
				$verify = password_verify($this->password, $usuario->password);

				if($verify){
					$result = $usuario;
				}else{
					$result = false;
				}


			}

			return $result;			
		}


	}




 ?>