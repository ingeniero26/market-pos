<?php 
require_once "../controladores/ventas.controlador.php";
require_once "../modelos/ventas.modelo.php";

class AjaxVentas {
    public function ajaxObtenerNroBoleta() {
        $nroBoleta = VentasControlador::ctrObtenerNroBoleta();
        echo json_encode($nroBoleta,JSON_UNESCAPED_UNICODE);
    }
}

if(isset($_POST["accion"])&& $_POST["accion"] == 1) {
    $nroBoleta = new AjaxVentas();
    $nroBoleta ->ajaxObtenerNroBoleta();
}