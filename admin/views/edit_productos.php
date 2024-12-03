<?php

$id = $_GET['id'] ?? FALSE;

$producto = (new Producto())->producto_x_id($id);
$catalogo = (new Catalogo())->catalogo_completo($id);
$colores = (new Color())-> lista_completa();
 
?>



<div class="row -my-5">
    <div class="col">
        <h1 class="text-center mb-5">Editar  Producto</h1>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/edit_producto_acc.php?id=<?= $producto->getId() ?>" method="POST" enctype="multipart/form-data">

            <div class="col-6 mb-3">
                <label class="form-label" for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $producto->getNombre() ?>" required>

            </div>

        

            <div class="col-2 mb-3">
                <label class="form-label" for="imagen">Imagen actual:</label>
                <img width="150px" src="../img/productos/<?=$producto->getImagen() ?>" alt="" class="img-fluid">
                <input type="hidden" class="form-control" name="imagen_og" id="imagen_og" value="<?= $producto->getImagen() ?>">

            </div>

            <div class="col-4 mb-3">
                <label class="form-label" for="imagen">Reemplazar imagen:</label>
                <input type="file" class="form-control" name="imagen" id="imagen">

            </div>



            <div class="col-6 mb-3">
                            <label class="form-label" for="titulo">Titulo:</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" required  value="<?= $producto->getTitulo() ?>">
                        </div>

                        
                        <div class="col-12 mb-3">
                            <label class="form-label" for="descripcion">descripcion : </label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?= $producto->getDescripcion() ?>"  required>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="stock">Stock</label>
                            <input type="text" class="form-control" name="stock" id="stock" value="<?= $producto->getStock() ?>"  required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="precio">Precio</label>
                            <input type="number" class="form-control" name="precio" id="precio" value="<?=$producto->getPrecio() ?>"  required>
                        </div>



                        <div class="col-6 mb-3">
                            <label class="form-label" for="id_catalogo">Catalogo</label>
                            <select class="form-select" name="id_catalogo" id="id_catalogo">
                                <option value="" selected disabled>Elija una opcion</option>
                                <?php foreach($catalogo as $c){ ?>
                                        <option value="<?= $c->getId() ?>" <?= $c->getId() == $catalogo->getId_catalogo() ? "selected" : "" ?> ><?= $c->getNombre_completo() ?></option>

                                <?php } ?>  
                            </select>
                        </div>
                    


                        <div class="col-6 mb-3">
                            <label class="form-label" for=" id_colores">Colores</label>
                            <select class="form-select" name=" id_colores" id=" id_colores">
                                <option value="" selected disabled>Elija una opcion</option>
                                <?php foreach($color as $co){ ?>
                                        <option value="<?= $co->getId() ?>" <?= $co->getId() == $color->getId_color() ? "selected" : "" ?> ><?= $co->getNombre_completo() ?></option>

                                <?php } ?>  
                            </select>
                        </div>
                    
         

            <button type="submit"  class="btn btn-primary">Editar Productos</button>



            </form>

        </div>

    </div>

</div>










