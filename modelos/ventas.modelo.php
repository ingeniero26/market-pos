<?php

require_once "conexion.php"; 
 class VentasModelo {
     static public function mdlObtenerNroBoleta() {
         $stmt = Conexion::conectar()->prepare("call prc_obtenerNroBoleta()");
         $stmt ->execute();
         return $stmt->fetch(PDO::FETCH_OBJ);
     }
 }