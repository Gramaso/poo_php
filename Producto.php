<?php

abstract class Producto {
    protected $nombre;
    protected $precio;
    protected $categori = [];

    public function __construct($nombre, $precio){
        $this ->nombre = $nombre;
        $this ->precio = $precio;
    } 
    public function getPrecio() {
        return $this->precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    abstract public function calculaPrecioFinal ();
}
?>