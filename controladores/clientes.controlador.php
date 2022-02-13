<?php 

class ClientesControlador {
	static public function ctrListarCLientes() {
		$clientes =ClientesModelo::mdlListarClientes();

		return $clientes;
	}




}









 ?>