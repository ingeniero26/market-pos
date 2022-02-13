<?php 

require_once "conexion.php";

class ClientesModelo {
	    static public function mdlListarClientes() {
        
        $stmt = Conexion::conectar()->prepare("SELECT
    `id_cliente`    , `nombre`
    , `apellido_paterno`    , `apellido_materno`
    , `tipo_documento`    , `documento`
    , `direccion`    , `telefono`
    , `correo`    , `estado`
   
		FROM
    `clientes`
					ORDER BY nombre ASC");
     
        $stmt->execute();

        return $stmt->fetchAll();
    }
}


 ?>