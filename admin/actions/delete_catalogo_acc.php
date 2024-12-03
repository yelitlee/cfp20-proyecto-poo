<?php

    require_once "../../functions/autoload.php";
   

    $id = $_GET['id'] ?? FALSE;

    
    $catalogo  = (new Catalogo())->catalogo_completo($id);

    try {

     
          $catalogo->delete(); 

         
            header("Location: ../index.php?sec=admin_catalogos");
    } catch (\Exception $c) {
        die("No se pudo eliminar el catalogo".  $c);
    }




?>