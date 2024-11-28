<?php

require_once "../../functions/autoload.php";


$postData = $_POST;

$id = $_GET['id'] ?? FALSE;

$fileData = $_FILES['imagen'] ?? FALSE;

/* echo "<pre>";
print_r($fileData);
echo "</pre>";

die(); */




try {


    $producto = new Producto();

    if(!empty($fileData['tmp_name'])){
        if (!empty($postData['imagen_og'])) {
            (new Imagen())->borrarImagen(__DIR__."/../../img/productos/". $postData['imagen_og']);
        }

        $imagen = (new Imagen())->subirImagen(__DIR__."/../../img/productos", $fileData);

        $producto->remplazar_imagen($imagen, $id);

    }

   

    $productos->edit($postData['nombre'],$postData['titulo'],$postData['descripcion'],$postData['stock'],$postData['precio'],$imagen,$postData['id_catalogo'],$postData['id_colores']);

    header("location: ../index.php?sec=admin_productos");
} catch (\Exception $e) {
    die("no se puede cargar el producto". $e);
}

?>