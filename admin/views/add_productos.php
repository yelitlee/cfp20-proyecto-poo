<?php

$catalogo = (new Catalogo())->lista_completa();
$colores = (new Color())-> lista_completa();


?>


<div class="row -my-5">
    <div class="col">
        <h1 class="text-center mb-5">Agregar Nuevo Producto</h1>

        
        <div>
            <?= (new Alerta())->get_alertas() ?>
         </div>

        <div class="row mb-5 d-flex align-items-center">
            <form class="row g-3" action="actions/add_producto_acc.php" method="POST" enctype="multipart/form-data">

            <div class="col-6 mb-3">
                <label class="form-label" for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>

            </div>



            <div class="col-6 mb-3">
                <label class="form-label" for="nombre">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" required>

            </div>


            
            <div class="col-6 mb-3">
                <label class="form-label" for="descripcion">Descripcion:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion"   required>

            </div>

            <div class="col-12 mb-3">
                <label class="form-label" for="stock">Stock :</label>
                <input type="text" class="form-control" name="stock" id="stock" required>
                
            </div>


            <div class="col-6 mb-3">
                <label class="form-label" for="precio">Precio:</label>
                <input type="number" class="form-control" name="precio" id="precio"   required>

            </div>

            <div class="col-6 mb-3">
                <label class="form-label" for="imagen">Imagen:</label>
                <input type="file" class="form-control" name="imagen" id="imagen">

            </div>



            <div class="col-6 mb-3">
                <label class="form-label" for="animal">Catalogo</label>
                <select class="form-select" name="id_catalogo" id="id_catalogo">
                    <option value="" selected disabled>Elija una opcion</option>
                    <?php foreach($catalogo as $c){ ?>
                    
                        <option value="<?= $c->getId() ?>"><?= $c->getNombre() ?></option>

                    <?php } ?>
                </select>
 
            </div>


            <div class="col-6 mb-3">
                <label class="form-label" for="id_color">Colores</label>
                <select class="form-select" name="id_colores" id="id_colores">
                    <option value="" selected disabled>Elija una opcion</option>
                    <?php foreach($colores as $co){ ?>
                    
                        <option value="<?= $co->getId() ?>"><?= $co->getNombre() ?></option>

                    <?php } ?>
                </select>
 
            </div>

      

            <button type="submit"  class="btn btn-primary">Cargar Productos</button>



            </form>

        </div>

    </div>

</div>