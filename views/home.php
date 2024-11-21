<?php
require_once "libraries/productos.php";


?>

<div id="carouselExampleAutoplaying" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="250px" src="img/per.webp" class="d-block w-50" alt="perritos">
    </div>
    <div class="carousel-item">
      <img height="250px" src="img/gat.jpg" class="d-block w-25" alt="gatitos">
    </div>
    <div class="carousel-item">
      <img height="250px" src="img/hams.jpg" class="d-block w-25" alt="hamstersitos">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="d-flex justify-content-center p-5">
    <div>
        <h1 class="text-center mb-5 fw-bold">Bienvenidos a Nuestra Tienda de Mascotas</h1>
        <div class="row mb-5 d-flex align-itms-center">



            <div class="col-7">
                <p class="fs-4 text-center">Visitanos para que veas los variados productos y servicios que tenemos para tus mascotas, ofrecemos una amplia variedad de productos de calidad y brindamos atención personalizada a nuestros clientes.</p>
            </div>


            <div class="col-5 mb-5">
                <img class="d-block mx-auto img-fluid" src="img/pet shop.jpg" alt="home">
            </div>
        </div>
    </div>
</div>


<h1 class="text-center mb-4 ">Categorias</h1>

<div class="row">
    <a href="index.php?sec=mascotas&masc=perro"  class="col-4">
        <div class="card" style="width: 18rem;">
            <img height="300px" src="img/perro.jpg" class="card-img-top" alt="...">
         
        </div>
    </a>

    <a href="index.php?sec=mascotas&masc=gato"  class="col-4">
        <div class="card" style="width: 18rem;">
            <img height="300px" src="img/gato.jpg" class="card-img-top" alt="...">
        
        </div>
    </a>

    <a href="index.php?sec=mascotas&masc=hamsters" class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="img/hamsters.jpg" class="card-img-top" alt="...">
         
        </div>
    </a>
</div>



<div class="mt-1 mb-5">
    <h2 class=" cata text-center">Ver todo nuestro catalogo</h2>

    <a href="index.php?sec=todos">
        <img width="400" class="d-block mx-auto" src="img/productos.webp" alt="dc-comic">
    </a>

</div>