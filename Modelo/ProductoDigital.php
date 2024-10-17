<?php
include_once 'Producto.php';
class ProductoDigital extends Producto {
    public function calculaPrecioFinal()
    {
        return $this -> precio * ($this->precio);
    }
    
}
?>