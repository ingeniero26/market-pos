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

    static public function mdlRegistrarClientes($nombre, $apellido1, $apellido2, $tipo_documento,$documento,$direccion,$telefono,$correo, $estado, $fecha) {
        $stmt = Conexion::conectar()->prepare("INSERT INTO clientes(nombre,apellido_paterno,apellido_materno, tipo_documento,documento,direccion,telefono,correo, estado ,fregistro) VALUES (:nombre,:apellido1,:apellido2,:tipo_documento,:documento,:direccion,:telefono,:correo,:estado,:fecha)");

        $stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt -> bindParam(":apellido1", $apellido1, PDO::PARAM_STR);
        $stmt -> bindParam(":apellido2", $apellido2, PDO::PARAM_STR);
        $stmt -> bindParam(":tipo_documento", $tipo_documento, PDO::PARAM_STR);
        $stmt -> bindParam(":documento", $documento, PDO::PARAM_STR);
        $stmt -> bindParam(":direccion", $direccion, PDO::PARAM_STR);
        $stmt -> bindParam(":telefono", $telefono, PDO::PARAM_STR);
        $stmt -> bindParam(":correo", $correo, PDO::PARAM_STR);
        $stmt -> bindParam(":estado", $estado, PDO::PARAM_STR);
        $stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
        
        

        if($stmt -> execute()){
            return "el cliente se registró correctamente";
        }else{
            return "Error, no se pudo registrar el cliente";
        }        

        $stmt = null;
    }
}


 ?>