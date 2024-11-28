<?php

$productos = (new Producto())->catalogo_completo();


?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administracion de Producto</h1>
        <div class="row mb-5 d-flex align-items-center">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Imagen</th> 
      <th scope="col">ID</th>
      <th scope="col">Nombret</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Stock</th>
      <th scope="col">Precio</th>
      
    </tr>
  </thead>
  <tbody>

  <?php foreach ($productos as $p){ ?>

    <tr>
      <td><img src="../img/mascotas/<?= $p->getImagen() ?>" class="img-fluid rounded" alt=""></td>
      <th scope="row"><?= $p->getId() ?></th>
      <td><?= $p->getNombre() ?></td>
      <td><?= $p->getTitulo() ?></td>
      <td><?= $p->getDescripcion() ?></td>
      <td><?= $p->getStock() ?></td>
      <td><?= $p->getPrecio() ?></td>
      <td>
        <a class="btn btn-warning mt-2" href="index.php?sec=edit_productos&id=<?=$p->getId() ?>">Editar</a>

        <a class="btn btn-danger mt-2" href="index.php?sec=delete_productos&id=<?=$p->getId() ?>">Eliminar</a>
      </td>
    </tr>

    <?php } ?>

  </tbody>
</table>

<a class="btn btn-primary mt-5" href="index.php?sec=add_productos">Cargar Nuevo Producto</a>


        </div>
    </div>
</div>