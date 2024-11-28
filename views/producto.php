<?php

    $id = $_GET['id'] ?? FALSE;

    $miObjetoProducto = new Producto();
    $masc = $miObjetoProducto->producto_x_id($id);

?>

<div class="row">
    <?php if (isset($masc)) { ?>
        <h1 class="text-center my-5"><?= $masc->getNombre() ?></h1>
        <div class="col">
            <div class="card mb-5">
                <div class="row g-0">
                    <div class="col-5">
                        <img class="img-fluid rounded-start" src="img/mascotas/<?= $masc->getImagen() ?>" alt="">
                    </div>
                    <div class="col-7 d-flex flex-column p-3 ">
                        <div class="card-body flex-grow-0">
                            <h2 class="card-title fs-2 mb-4"><?= $masc->getTitulo() ?></h2>
                            <p class="card-text"><?= $masc->getDescripcion() ?></p>
                        </div>
                        <ul class="list-group ">
                            <li class="list-group-item">color: <?= $masc->getColor() ?></li>
                            <li class="list-group-item">stock: <?= $masc->getStock() ?></li>
                        </ul>


                    
                                <div class="card-body">
                                    <h2 class="card-title fs-6 mb-4 text-danger">Medios de Pago</h2>
                                    <div class="d-flex">
                                        <i class="fa-brands fa-cc-visa me-3 fs-3 text-info"></i>
                                        <i class="fa-brands fa-cc-mastercard me-3 fs-3 text-warning"></i>
                                        <i class="fa-brands fa-cc-paypal me-3 fs-3 text-primary"></i>
                                        <i class="fa-solid fa-money-bill me-3 fs-3 text-primary-emphasis"></i>
                                        <i class="fa-solid fa-credit-card me-3 fs-3 text-success"></i>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <p class="fs-3 mb-3 fw-bold text-danger text-center">$<?= $masc->getPrecio()?></p>
                                    <a href="#" class="btn btn-danger w-100 fw-bold">COMPRAR</a>
                                </div>



                            </div>

                        </div>

                    </div>
                </div>
            <?php } else { ?>
                <h2 class="text-center m-5 text-danger">No se encontro el producto deseado</h2>

            <?php } ?>


            </div>