<?php 
require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";
class AjaxClientes {
	public $id;
	public $nombre;
	public $apellido1;
	public $apellido2;
	public $tipo_doc;
	public $documento;

	public $direccion;
	public $telefono;
	public $correo;

	public $estado;
	public $fecha;


	public function ajaxListarClientes(){
		$clientes = ClientesControlador::ctrListarClientes();
		echo json_encode($clientes, JSON_UNESCAPED_UNICODE);
	}
	public function registrarClientes(){
		
		$respuesta = ClientesControlador::ctrRegistrarCliente($this->nombre, $this->apellido1,$this->apellido2,$this->tipo_doc, $this->documento,$this->direccion,$this->telefono,$this->correo, $this->estado,$this->fecha );

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

	public function eliminarCategoria(){
		
		$respuesta = CategoriasControlador::ctrEliminarCategoria($this->id);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

	public function actualizarCategoria(){
		
		$respuesta = CategoriasControlador::ctrActualizarCategoria($this->id,$this->categoria, $this->peso, $this->fecha, $this->estado);

		echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
	}

}



if(!isset($_POST['accion'])) {
	$clientes = new AjaxClientes();
	$clientes ->ajaxListarClientes();
} else {
	if($_POST["accion"] == "registrar"){
		$insertar = new ajaxClientes();
		$insertar->nombre = $_POST["nombre"];
		$insertar->apellido1 = $_POST["apellido1"];
		$insertar->apellido2 = $_POST["apellido2"];
		$insertar->tipo_doc = $_POST["tipo_doc"];
		$insertar->documento = $_POST["documento"];
		$insertar->direccion = $_POST["direccion"];
		$insertar->telefono = $_POST["telefono"];
		$insertar->correo = $_POST["correo"];
		$insertar->estado = $_POST["estado"];
		$insertar->fecha = $_POST["fecha"];
		
		
		$insertar->registrarClientes();
	}

		if($_POST["accion"] == "eliminar"){
		$eliminar = new ajaxCategorias();

		$eliminar->id = $_POST["id"];
		
		$eliminar->eliminarCategoria();
	}
		if($_POST["accion"] == "actualizar"){
		$actualizar = new ajaxCategorias();

		$actualizar->id = $_POST["id"];
		$actualizar->categoria = $_POST["categoria"];
		$actualizar->peso = $_POST["peso"];
		$actualizar->fecha = $_POST["fecha"];
		$actualizar->estado = $_POST["estado"];
	
		
		$actualizar->actualizarCategoria();
	}

}


