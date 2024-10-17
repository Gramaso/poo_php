<?php
require_once 'Modelo/Cliente.php';
require_once 'ProductoFisico.php';
$c1 =new Cliente ("Pablo Mayo");
$c2 = new Cliente ("Pablo Marzo");

$productofisico = new ProductoFisico("telefono", 100, 0.2);
echo "Nombre :". $productofisico->getNombre() ."Precio". $productofisico->getPrecio() ."Peso". $productofisico->calculaPrecioFinal() ;
?>

<ol>
    <li><?= $c1->getNombre()?></li>
    <li><?= $c2->getNombre()?></li>
</ol>