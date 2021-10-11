<?php 
class administracion{

	public $cedula,$correo,$clave,$nombre,$celular,$ciudad,$direccion;
	public $cedulaClienteD,$codProducto,$cantidad,$total,$estado;
	public $codPedido,$empresa,$telefono,$fechaEnvio;
	public $cedulaCliente,$fechaPedido;
	public $producto,$cantidadExistencia,$precio;
	private $pdo;

	public function __construct(){

		try{
			$this->pdo = new PDO('mysql:host=localhost;
				dbname=admin', 'root', '');
		}
		catch(Exception $e){
			return die($e->getMessage());
		}
	}

	function registrarCliente (){
		//Funcion para realizar el registro de los clientes
		$x = $this->pdo->prepare('INSERT INTO cliente (cedula,correo,clave,nombre,celular,ciudad,direccion) VALUES (?,?,?,?,?,?,?)');
		$x->execute(array($this->cedula,$this->correo,$this->clave,$this->nombre,$this->celular,$this->ciudad,$this->direccion));
		return $x;
	}

	function registrarDetalles () {
		//Funcion para realizar el registro de los datos en la tabla detalles
		$x = $this->pdo->prepare('INSERT INTO detalles (cedulaCliente,codProducto,cantidad,total,estado) VALUES (?,?,?,?,?)');
		$x->execute(array($this->cedulaClienteD,$this->codProducto,$this->cantidad,$this->total,$this->estado));
		return $x;
	}

	function registrarEnvioDetalles(){
		//Funcion para realizar el registro de los datos en la tabla enviodetalles
		$x = $this->pdo->prepare('INSERT INTO enviodetalles (cedulaCliente,empresa,telefono,fechaEnvio) VALUES (?,?,?,?)');
		$x->execute(array($this->cedulaCliente,$this->empresa,$this->telefono,$this->fechaEnvio));
		return $x;
	}

	function registrarPedido(){
		//Funcion para realizar el registro de los datos en la tabla pedido
		$x = $this->pdo->prepare('INSERT INTO pedido (cedulaCliente,fechaPedido) VALUES (?,?)');
		$x->execute(array($this->cedulaCliente,$this->fechaPedido));
		return $x;
	}

	function consultarCliente (){
		//Funcion para consultar todos los datos de la tabla cliente
		$x = $this->pdo->prepare('SELECT * FROM cliente');
		$x->execute();
		return $x->fetchALL(PDO::FETCH_OBJ);
	}

	function consultarDetalles (){
		//Funcion para consultar todos los datos de la tabla detalles
		$x = $this->pdo->prepare('SELECT * FROM detalles');
		$x->execute();
		return $x->fetchALL(PDO::FETCH_OBJ);
	}

	function consultarenviodetalles (){
		//Funcion para consultar todos los datos de la tabla enviodetalles
		$x = $this->pdo->prepare('SELECT * FROM enviodetalles');
		$x->execute();
		return $x->fetchALL(PDO::FETCH_OBJ);
	}

	function consultarPedido (){
		//Funcion para consultar todos los datos de la tabla pedido
		$x = $this->pdo->prepare('SELECT * FROM pedido');
		$x->execute();
		return $x->fetchALL(PDO::FETCH_OBJ);
	}

	function consultarenviodetallesCedula (){
		//Funcio para consultar todos los datos de la tabla envio y cliente
		$x = $this->pdo->prepare('SELECT En.empresa,En.telefono,En.fechaEnvio,Cl.cedula  FROM enviodetalles EN INNER JOIN cliente Cl ON En.cedulaCliente = Cl.cedula');
		$x->execute();
		return $x->fetchALL(PDO::FETCH_OBJ);
	}

	function consultarProducto (){
		//Funcio para consultar todos los datos de la tabla producto
		$x = $this->pdo->prepare('SELECT * FROM producto');
		$x->execute();
		return $x->fetchALL(PDO::FETCH_OBJ);
	}

	function obtenerCliente ($cedula){
		//Funcion para obtener los datos de un cliente en concreto
		$x = $this->pdo->prepare('SELECT * FROM cliente where cedula = ?');
		$x->execute(array($cedula));
		return $x->fetchALL(PDO::FETCH_OBJ);
	}

	function obtenerDetalles ($codPedido){
		//Funcion para obtener los datos de detalles en concreto
		$x = $this->pdo->prepare('SELECT * FROM detalles where codPedido = ?');
		$x->execute(array($codPedido));
		return $x->fetchALL(PDO::FETCH_OBJ);
	}

	function obtenerenviodetalles ($codPedido){
		//Funcion para obtener los datos de un envio en concreto
		$x = $this->pdo->prepare('SELECT * FROM enviodetalles where codPedido = ?');
		$x->execute(array($codPedido));
		return $x->fetchALL(PDO::FETCH_OBJ);
	}

	function obtenerPedido ($cedulaCliente){
		//Funcion para obtener los datos de un pdido en concreto
		$x = $this->pdo->prepare('SELECT * FROM pedido where cedulaCliente = ?');
		$x->execute(array($cedulaCliente));
		return $x->fetchALL(PDO::FETCH_OBJ);
	}

	function obtenerProducto($codProducto){
		//Funcion para obtener los datos de un producto en concreto
		$x = $this->pdo->prepare('SELECT * FROM producto where codProducto = ?');
		$x->execute(array($codProducto));
		return $x->fetchALL(PDO::FETCH_OBJ);
	}

	function actualizarCliente (){
		//Funcion para actualizar los datos de un cliente
		$x = $this->pdo->prepare('UPDATE cliente SET celular = ?, ciudad = ?, direccion = ?
			WHERE cedula = ?');
		$x-> execute(array($this->celular,$this->ciudad,$this->direccion,$this->cedula));
		return $x;
	}

	function actualizarDetalles (){
		//Funcion para actualizar los datos de un detalle
		$x = $this->pdo->prepare('UPDATE detalles SET estado = ?
			WHERE detalles = ?');
		$x-> execute(array($this->estado,$this->detalles));
		return $x;
	}
	
	function actualizarProducto(){
		//Funcion para actualizar los datos de un producto
		$x = $this->pdo->prepare('UPDATE producto SET cantidadExistencia = ?, precio = ? 
			WHERE codProducto = ?');
		$x-> execute(array($this->cantidadExistencia,$this->precio,$this->codProducto));
		return $x;
	}

	function actualizarProductoCantidad(){
		//Funcion para actualizar la cantidad de un producto
		$x = $this->pdo->prepare('UPDATE producto SET cantidadExistencia = ? 
			WHERE codProducto = ?');
		$x-> execute(array($this->cantidadExistencia,$this->codProducto));
		return $x;
	}

	function validar($cedula, $clave){
		//Funcion para autenticar los usuarios
		$x = $this->pdo->prepare('SELECT * FROM cliente where cedula = ? and clave = ?');
		$x->execute(array($cedula,$clave));
		return $x->fetchALL(PDO::FETCH_OBJ);
	}
}
?>