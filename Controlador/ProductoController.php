<?php
class ProductoController {
    private $Servicio;

    public function _construct() {
        //Aqui se hace la llamada al objeto servicio
    }

    public function listaProducto () {
        //Usa los tributos de servicio y trae los datos de la base de datos
    }

    public function ejecuta() {
        $producto = $this ->listaProducto();

        //Carga la vista y gyuarda los productos
        require_once("Vista/Main.php");
    }
}
?>