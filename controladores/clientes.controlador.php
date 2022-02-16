<?php 

class ClientesControlador {
	static public function ctrListarCLientes() {
		$clientes =ClientesModelo::mdlListarClientes();

		return $clientes;
	}

	static public function ctrRegistrarCliente($nombre, $apellido1, $apellido2, $tipo_documento,$documento,$direccion,$telefono,$correo, $estado, $fecha ){

		$respuesta = ClientesModelo::mdlRegistrarClientes($nombre, $apellido1, $apellido2, $tipo_documento,$documento,$direccion,$telefono,$correo, $estado, $fecha);

		return $respuesta;
	}




}









 ?>