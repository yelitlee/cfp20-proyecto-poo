<?php

    require_once "../../functions/autoload.php";
   

    $postData = $_POST;

    $id = $_GET['id'] ?? FALSE;

    $fileData = $_FILES['portada'] ?? FALSE;






    try {

        $catalogo = new Catalogo();

    


        $catalogo->edit(
            $postData['nombre'],
            $id
        
        );

        header("Location: ../index.php?sec=admin_catalogos");
    } catch (\Exception $c) {
        die("No se pudo editar el catalogo".  $c);
    }




?>