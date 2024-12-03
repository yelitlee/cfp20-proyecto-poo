<?php

require_once "../../functions/autoload.php";


$id = $_GET['id'] ?? FALSE;

$producto = (new Producto())->producto_x_id($id);

try {


   


        if (!empty($producto->getImagen())) {
            (new Imagen())->borrarImagen(__DIR__."/../../img/productos/". $producto->getImagen());

            
        }

        $producto->delete();



      header("location: ../index.php?sec=admin_productos");
} catch (\Exception $p) {
    die("no se puede eliminar el producto". $p);
}

?>