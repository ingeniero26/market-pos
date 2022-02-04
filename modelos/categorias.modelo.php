<?php 
require_once "conexion.php";

class CategoriasModelo {
	    static public function mdlListarCategorias() {
        
        $stmt = Conexion::conectar()->prepare("SELECT id_categoria, nombre_categoria 
					FROM categorias
					c
					ORDER BY nombre_categoria ASC");
     
        $stmt->execute();

        return $stmt->fetchAll();
    }

}



 ?>