<?php

    
$miProductoCatalogo = new Producto();

$productos = $miProductoCatalogo->catalogo_completo();


?>

<h1 class="text-center my-5 ">Todos los productos</h1>

<div class="row">

    <?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $masc) { ?>
    
        <div class="col-3 "  >
        <div class="card mb-3">
            <img src="img/mascotas/<?=$masc->getImagen() ?>" class="card-img-top" alt="" style="max-height: 350px; overflow: hidden;">
            <div class="card-body"  style="height:125px; overflow: hidden;" >
                <h5 class="card-title"><?=$masc->getTitulo()?></h5>
                <p class="card-text"><?= $masc->getDescripcion() ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">color: <?=$masc->getColor() ?></li>
                <li class="list-group-item">stock: <?=$masc->getStock() ?></li>
            </ul>
            <div class="card-body">
                <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?=$masc->getPrecio()?></p>
                <a href="index.php?sec=producto&id=<?= $masc->getId() ?>" class="btn btn-danger w-100 fw-bold" >VER MÁS</a>
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