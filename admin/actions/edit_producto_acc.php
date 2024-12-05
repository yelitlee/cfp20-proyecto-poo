<?php

require_once "../../functions/autoload.php";


$postData = $_POST;

$id = $_GET['id'] ?? FALSE;

$fileData = $_FILES['imagen'] ?? FALSE;

/*  echo "<pre>";
print_r($fileData);
echo "</pre>";

die();  */




try {


    $productos = new Producto();

    if(!empty($fileData['tmp_name'])){
        if (!empty($postData['imagen_og'])) {
            (new Imagen())->borrarImagen(__DIR__ . "/../../img/mascotas/". $postData['imagen_og']);
        }

        $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/mascotas", $fileData);
 
      

        $productos->reemplazar_imagen($imagen, $id);

      

    }

    
   

   

    $productos->edit($postData['nombre'],$postData['titulo'],$postData['descripcion'],$postData['stock'],$postData['precio'],$postData['id_catalogo'],$postData['id_colores'], $id);

    header("location: ../index.php?sec=admin_productos");
} catch (\Exception $p) {
    die("no se puede editar el producto". $p);
}

?>