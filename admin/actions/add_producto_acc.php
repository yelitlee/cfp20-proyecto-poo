<?php

require_once "../../functions/autoload.php";


$postData = $_POST;

$fileData = $_FILES['imagen'];



try {

    $imagen = (new Imagen())->subirImagen(__DIR__."/../../img/productos", $fileData);

    (new Producto())->insert($postData['nombre'],$postData['titulo'],$postData['descripcion'],$postData['stock'],$postData['precio'],$imagen,$postData['id_catalogo'],$postData['id_colores']);

    header("location: ../index.php?sec=admin_productos");
} catch (\Exception $e) {
    die("no se puede cargar el producto". $e);
}

?>

