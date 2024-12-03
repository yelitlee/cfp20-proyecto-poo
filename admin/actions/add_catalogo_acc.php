<?php

    require_once "../../functions/autoload.php";
   

    $postData = $_POST;




    try {


        (new Catalogo())->insert($postData['nombre']);

        header("Location: ../index.php?sec=admin_catalogos");
    } catch (\Exception $c) {
        die("No se pudo cargar el catalogo".  $c);
    }




?>