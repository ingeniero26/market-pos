<?php


class ProductosControlador{

    static public function ctrCargaMasivaProductos($fileProductos){
        
        $respuesta = ProductosModelo::mdlCargaMasivaProductos($fileProductos);
        
        return $respuesta;
    }

    static public function ctrListarProductos() {
        $respuesta = ProductosModelo::mdlListarProductos();
        return  $respuesta;
    }

    static public function ctrRegistrarProducto($codigo_producto,$id_categoria_producto,$descripcion_producto,$precio_compra_producto,$precio_venta_producto,$utilidad,$stock_producto,$minimo_stock_producto,$ventas_producto) {

        $registroProducto = ProductosModelo::mdlRegistrarProducto($codigo_producto,$id_categoria_producto,$descripcion_producto,$precio_compra_producto,$precio_venta_producto,$utilidad,$stock_producto,$minimo_stock_producto,$ventas_producto);

        return $registroProducto;
    }
}