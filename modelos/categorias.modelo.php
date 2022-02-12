<?php 
require_once "conexion.php";

class CategoriasModelo {
	    static public function mdlListarCategorias() {
        
        $stmt = Conexion::conectar()->prepare("SELECT id_categoria, nombre_categoria,aplica_peso,fecha_creacion_categoria,estado
					FROM categorias
					c
					ORDER BY nombre_categoria ASC");
     
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function mdlRegistrarCategorias($categoria, $peso, $fecha, $estado) {
    	$stmt = Conexion::conectar()->prepare("INSERT INTO categorias(nombre_categoria,aplica_peso,fecha_creacion_categoria,estado) VALUES (:categoria,:peso,:fecha,:estado)");

		$stmt -> bindParam(":categoria", $categoria, PDO::PARAM_STR);
		$stmt -> bindParam(":peso", $peso, PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
		$stmt -> bindParam(":estado", $estado, PDO::PARAM_STR);
		

		if($stmt -> execute()){
            return "La categoría se registró correctamente";
        }else{
            return "Error, no se pudo registrar la categoría";
        }        

        $stmt = null;
    }

    	static public function mdlActualizarCategoria($id,$categoria, $peso, $fecha,$estado ){

		$stmt = Conexion::conectar()->prepare("UPDATE categorias
											   SET nombre_categoria = :categoria,
											   	   aplica_peso = :peso,
												   estado = :estado,
												   fecha_creacion_categoria = :fecha
											   WHERE id_categoria = :id");

		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);
		$stmt -> bindParam(":categoria", $categoria, PDO::PARAM_STR);
		$stmt -> bindParam(":peso", $peso, PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
		$stmt -> bindParam(":estado", $estado, PDO::PARAM_STR);
		

		if($stmt -> execute()){
            return "La categoría se actualizó correctamente";
        }else{
            return "Error, no se pudo actualizar la categoría";
        }        

        $stmt = null;
	}


    static public function mdlEliminarCategoria($id){

		$stmt = Conexion::conectar()->prepare("DELETE FROM categorias WHERE id_categoria = :id");

		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);

		if($stmt -> execute()){
            return "La categoría se eliminó correctamente";
        }else{
            return "Error, no se pudo eliminar la categoría";
        }        

        $stmt = null;

	}

}



 ?>