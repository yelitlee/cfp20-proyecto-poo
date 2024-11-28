<?php

require_once "../functions/autoload.php";

$secciones_validas = [
    "login" => [
    "titulo" => "Inicio de Sessión",
    "restringido" => FALSE
    ],
     "dashboard" => [
        "titulo" => "Panel de Control"
        
     ],
     "admin_productos" => [
        "titulo" => "Administracion de Productos"
     ],
     "add_productos" => [
        "titulo" => "Agregar Productos"
     ],
     "edit_productos" => [
        "titulo" => "Editar Productos"
     ],
     "delete_productos" => [
      "titulo" => "Eliminar Productos"
     ],
     "admin_catalogos" => [
      "titulo" => "administracion de catalogo"
     ],
     "add_catalogo" => [
      "titulo" => "Agregar Catalogo"
     ]
  
    
  ];


 



  
  $seccion = $_GET['sec'] ?? "dashboard";


  if(!array_key_exists($seccion, $secciones_validas)){
      $vista= "404";
      $titulo = "404 - pagina no encontrada";
  }else {
     $vista= $seccion;
     $titulo = $secciones_validas[$seccion]['titulo'];
  }

?>


<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  </head>
  <body> 
     
  <nav class="navbar navbar-expand-lg bg-danger-subtle  ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img width="80" height="80" src="../img/logo1.jpg" alt="">Lee's Pet Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?sec=dashboard">Dashboard</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?sec=admin_productos">Admin de Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?sec=admin_catalogos">Admin de Catalogo</a>
        </li>
 
        
      </ul>
    </div>
  </div>
</nav>



<main class="container">
  
  <?php


  require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php"

  ?>


 </main>


<footer class="bg-danger-subtle">
    <p class="text-ligth text-center p-4">&copy; LEE'S PET SHOP  - Todos los derechos reservados  </p>
   </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>



