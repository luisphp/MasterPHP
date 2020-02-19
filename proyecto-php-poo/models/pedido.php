<?php 

	class Pedido{

		//Propiedades de tipo privadas de esta clase 

		private $id_pedido;
		private $fk_id_usuario;
		private $provincia;
		private $localidad;
		private $direccion;
		private $coste;
		private $estado;
		private $fecha;
		private $hora;
		private $db;

	public function __construct(){
			$this->db = Database::connect();
		}

		//Getters y Setters de esta clase

    public function getIdPedido()
    {
        return $this->id_pedido;
    }

    public function setIdPedido($id_pedido)
    {
        $this->id_pedido = $this->db->real_escape_string($id_pedido);

    }

    public function getFkIdUsuario()
    {
        return $this->fk_id_usuario;
    }

    public function setFkIdUsuario($fk_id_usuario)
    {
        $this->fk_id_usuario = $this->db->real_escape_string($fk_id_usuario);

    }

    public function getProvincia()
    {
        return $this->provincia;
    }

    public function setProvincia($provincia)
    {
        $this->provincia = $this->db->real_escape_string($provincia);
    }

    public function getLocalidad()
    {
        return $this->localidad;
    }

    public function setLocalidad($localidad)
    {
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    public function getCoste()
    {
        return $this->coste;
    }

    public function setCoste($coste)
    {
        $this->coste = $this->db->real_escape_string($coste);
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $this->db->real_escape_string($estado);
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $this->db->real_escape_string($fecha);
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function setHora($hora)
    {
        $this->hora = $this->db->real_escape_string($hora);
    }


		public function getAll(){

			$productos = $this->db->query("SELECT * FROM pedidos ORDER BY id_pedido DESC");

			return $productos;
		}

		public function getOne(){

			$producto = $this->db->query("SELECT * FROM pedidos WHERE id_pedido = '{$this->getId_pedido()}'");

			return $producto->fetch_object();
		}

		//Guardar un nuevo producto
		public function save(){

			$sql = "INSERT INTO `pedidos`(`fk_id_usuario`, `provincia`, `localidad`, `direccion`, `coste`, `estado`, `fecha`, `hora`) VALUES ('{$this->getFkIdUsuario()}','{$this->getProvincia()}','{$this->getLocalidad()}','{$this->getDireccion()}','{$this->getCoste()}','{$this->getEstado()}',CURDATE(), CURTIME())";

			$save =  $this->db->query($sql);

			$result = false;

			if($save){

				$result = true;
			}


			//Obtener error de base de datos:
			//var_dump($this->db->error);
			//die();

			return $result;
		}

		public function saveLinea(){

			$sql = "SELECT LAST_INSERT_ID() as pedido;";
			$query = $this->db->query($sql);
			$pedido_id = $query->fetch_object()->pedido;


			foreach ($_SESSION['cart'] as $indice => $value){

					$producto = $value['producto'];

					$id = $producto->id_producto;
					$unidad = $value['unidades'];

					$insert = "INSERT INTO `lineas_pedidos`( `fk_id_pedido`, `fk_id_producto`, `unidades`) VALUES ('{$pedido_id}','{$id}','{$unidad}')";

					$save =  $this->db->query($insert);
			}

				//var_dump($save, $pedido_id, $error);
				//die();

			$result = false;

			if($save){

				$result = true;
			}


			//Obtener error de base de datos:
			//var_dump($this->db->error);
			//die();

			return $result;
		}

		public function getOneByUser(){

			$sql = "SELECT p.id_pedido, p.coste  FROM pedidos p"
			." JOIN lineas_pedidos lp ON lp.fk_id_pedido  = p.id_pedido "
			." JOIN productos pro ON pro.id_producto = lp.fk_id_producto "
			." WHERE p.fk_id_usuario = '{$this->getFkIdUsuario()}' ORDER BY p.id_pedido DESC LIMIT 1";

			$order = $this->db->query($sql);

			return $order->fetch_object();

		}

		public function getProductoByPedido(){

			$sql = "SELECT "
		}



}



 ?>