<?php

 require_once "libraries/productos.php";
  
$productos = catalago_todas_mascotas();


?>

<h1 class="text-center my-5 ">Todos los productos</h1>

<div class="row">

    <?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $masc) { ?>
    
        <div class="col-3 "  >
        <div class="card mb-3">
            <img src="img/mascotas/<?=$masc['imagens'] ?>" class="card-img-top" alt="<?=$masc['mascota'] ?>" style="max-height: 350px; overflow: hidden;">
            <div class="card-body"  style="height:125px; overflow: hidden;" >
                <h5 class="card-title"><?=$masc['titulo'] ?></h5>
                <p class="card-text"><?= recortar_palabras($masc['descripcion'], 6) ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">color: <?=$masc['color'] ?></li>
                <li class="list-group-item">stock: <?=$masc['stock'] ?></li>
            </ul>
            <div class="card-body">
                <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?=$masc['precio'] ?></p>
                <a href="index.php?sec=producto&id=<?= $masc['id'] ?>" class="btn btn-danger w-100 fw-bold" >VER MÁS</a>
            </div>

        </div>
    </div>


    <?php } ?>

    <?php }else { ?>
         <div class="col-12">
             <h2 class="text-center text-danger mb-5">No se encontraron Productos</h2>
         </div>
    <?php } ?>
</div>