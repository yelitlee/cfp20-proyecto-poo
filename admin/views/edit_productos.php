<?php

$id = $_GET['id'] ?? FALSE;

$producto = (new Producto())->producto_x_id($id);

?>



<div class="row -my-5">
    <div class="col">
        <h1 class="text-center mb-5">Editar Nuevo Producto</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/edit_producto_acc.php?id=<?= $producto->getId() ?>" method="POST" enctype="multipart/form-data">

            <div class="col-6 mb-3">
                <label class="form-label" for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $personaje->getNombre() ?>" required>

            </div>

        

            <div class="col-2 mb-3">
                <label class="form-label" for="imagen">Imagen actual:</label>
                <img width="150px" src="../img/personajes/<?=$personaje->getImagen() ?>" alt="" class="img-fluid">
                <input type="hidden" class="form-control" name="imagen_og" id="imagen_og" value="<?= $personaje->getImagen() ?>">

            </div>

            <div class="col-4 mb-3">
                <label class="form-label" for="imagen">Reemplazar imagen:</label>
                <input type="file" class="form-control" name="imagen" id="imagen">

            </div>

         

            <button type="submit"  class="btn btn-primary">Editar Productos</button>



            </form>

        </div>

    </div>

</div>