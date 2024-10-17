<?php
    include_once 'Cliente.php';
    class ProductoFisico extends Producto {
        private $peso;
        
        public function __construct($nombre, $precio, $peso){
            parent::__construct($nombre, $precio);
            $this ->peso = $peso;
        }

        public function calculaPrecioFinal()
        {
            return $this -> precio * ($this->precio);
        }
    }
?>