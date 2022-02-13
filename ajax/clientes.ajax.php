<?php 
require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";
class AjaxClientes {
	public $id;
	public $categoria;
	public $peso;
	public $estado;
	public $fecha;


	public function ajaxListarClientes(){
		$clientes = ClientesControlador::ctrListarClientes();
		echo json_encode($clientes, JSON_UNESCAPED_UNICODE);
	}
	public function registrarCategorias(){
		
		$respuesta = CategoriasControlador::ctrRegistrarCategorias($this->categoria, $this->peso, $this->fecha, $this->estado);

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
		$insertar = new ajaxCategorias();
		$insertar->categoria = $_POST["categoria"];
		$insertar->peso = $_POST["peso"];
		$insertar->fecha = $_POST["fecha"];
		$insertar->estado = $_POST["estado"];
		
		$insertar->registrarCategorias();
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


