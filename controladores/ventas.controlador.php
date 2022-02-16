<?php 
class VentasControlador {

    static public function ctrObtenerNroBoleta() {
        $nroBoleta = VentasModelo::mdlObtenerNroBoleta();
        return $nroBoleta;
    }


    static public function ctrRegistrarVenta($datos,$nro_boleta,$total_venta,$descripcion_venta,$subtotal,$igv,$tipo_comprobante,$tipo_pago){
        
        $productos = VentasModelo::mdlRegistrarVenta($datos,$nro_boleta,$total_venta,$descripcion_venta,$subtotal,$igv,$tipo_comprobante,$tipo_pago);

        return $productos;

    }

}