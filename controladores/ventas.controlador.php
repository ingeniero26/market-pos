<?php 
class VentasControlador {

    static public function ctrObtenerNroBoleta() {
        $nroBoleta = VentasModelo::mdlObtenerNroBoleta();
        return $nroBoleta;
    }

}