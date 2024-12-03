<?php

require_once "../../functions/autoload.php";


$postData = $_POST;

$fileData = $_FILES['imagen'];



try {

    $imagen = (new Imagen())->subirImagen(__DIR__."/../../img/mascotas", $fileData);

    (new Producto())->insert($postData['nombre'],$postData['titulo'],$postData['descripcion'],$postData['stock'],$postData['precio'],$imagen,$postData['id_catalogo'],$postData['id_colores']);

    (new Alerta())->add_alerta("succes" , "El producto se cargo correctamente");

    header("location: ../index.php?sec=admin_productos");
} catch (\Exception $p) {
    die("no se puede cargar el producto". $p);
}

?>

