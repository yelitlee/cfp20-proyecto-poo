<?php

$catalogos = (new Catalogo())->lista_completa();


?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administracion de Catalogo</h1>
        <div class="row mb-5 d-flex align-items-center">

        
        <div>
            <?= (new Alerta())->get_alertas() ?>
         </div>


        <table class="table">
  <thead>
    <tr>
        
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acciones</th>
     
    </tr>
  </thead>
  <tbody>

  <?php foreach ($catalogos as $c){ ?>

    <tr>
 
      <td scope="row"><?= $c->getId() ?></td>
      <td scope="row"><?= $c->getNombre() ?></td>

      <td>
        <a class="btn btn-warning mt-2" href="index.php?sec=edit_catalogo&id=<?=$c->getId() ?>">Editar</a>

        <a class="btn btn-danger mt-2" href="index.php?sec=delete_catalogo&id=<?=$c->getId() ?>">Eliminar</a>
      </td>
    </tr>

    <?php } ?>

  </tbody>
</table>

<a class="btn btn-primary mt-5" href="index.php?sec=add_catalogo">Cargar Nuevo Animal</a>


        </div>
    </div>
</div>