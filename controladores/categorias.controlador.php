<?php 


class CategoriasControlador {
	static public function ctrListarCategorias() {
		$categorias =CategoriasModelo::mdlListarCategorias();

		return $categorias;
	}

	static public function ctrRegistrarCategorias($categoria, $peso, $fecha, $estado){

		$respuesta = CategoriasModelo::mdlRegistrarCategorias($categoria, $peso, $fecha, $estado);

		return $respuesta;
	}

		static public function ctrEliminarCategoria($id){

		$respuesta = CategoriasModelo::mdlEliminarCategoria($id);

		return $respuesta;
	}

		static public function ctrActualizarCategoria($id,$categoria, $peso, $fecha, $estado){

		$respuesta = CategoriasModelo::mdlActualizarCategoria($id,$categoria, $peso, $fecha, $estado);

		return $respuesta;
	}



}
 ?>