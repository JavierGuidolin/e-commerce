<?php

require_once 'classes/Authenticator.php';
Authenticator::initSession();

?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/7c3c4957c1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">

  <link rel="shortcut icon" type="image/png" href="../img/bs-favicon.png" />
  <title> BookStore | Login or Register</title>

</head>

<body>

  <!-- Header -->
  <header id="header" class="__background-cart">

    <?php require_once "../modules/navigationBar.php";?>

    <!-- TextHeader -->
    <section class="__header-cart">
      <div class="container">
        <div class="row">
          <article class="col-12">
            <div class="pl-4">
              <h1 class="text-uppercase text-center">Carrito de Compras</h1>
              <blockquote class="blockquote text-center">
                <p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="text-white-50 blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>
          </article>
        </div>
      </div>
    </section>
    <!-- EndTextHeader -->

  </header>
  <!-- EndHeader -->

  <!-- Main -->
  <main>

    <section class="container">

      <!-- Path -->
      <div class="mt-5">
        <nav aria-label="breadcrumb ">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-reset" href="../index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Carrito de Compras</li>
          </ol>
        </nav>
      </div>
      <!-- EndPath -->
      <div class="px-4 px-lg-0">


<div class="pb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

        <!-- Shopping cart table -->
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="border-0 bg-light">
                  <div class="p-2 px-3 text-uppercase">Producto</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                  <div class="py-2 text-uppercase">Precio</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                  <div class="py-2 text-uppercase">Cantidad</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                  <div class="py-2 text-uppercase">Remover</div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="border-0">
                  <div class="p-2">
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                    <div class="ml-3 d-inline-block align-middle">
                      <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex Originals</a></h5><span class="text-muted font-weight-normal font-italic d-block">Categoria: Relojes</span>
                    </div>
                  </div>
                </th>
                <td class="border-0 align-middle"><strong>$79.00</strong></td>
                <td>
                          <select class="border-0 align-middle form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                </td>
                <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="p-2">
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-3_cexmhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                    <div class="ml-3 d-inline-block align-middle">
                      <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Lumix camera lense</a></h5><span class="text-muted font-weight-normal font-italic">Categoria: Electronicos</span>
                    </div>
                  </div>
                </th>
                <td class="align-middle"><strong>$79.00</strong></td>
                <td>
                          <select class="border-0 align-middle form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                </td>
                <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <div class="p-2">
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-2_qxjis2.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                    <div class="ml-3 d-inline-block align-middle">
                      <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Gray Nike running shoe</a></h5><span class="text-muted font-weight-normal font-italic">Categoria: Fashion</span>
                    </div>
                  </div>
                  <td class="align-middle"><strong>$79.00</strong></td>
                  <td>
                            <select class="border-0 align-middle form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                  </td>
                  <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                  </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End -->
      </div>
    </div>

    <div class="row py-5 p-4 bg-white rounded shadow-sm">
      <div class="col-lg-6">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Codigo de cupon</div>
        <div class="p-4">
          <p class="font-italic mb-4">Si tienes un codigo de cupon, ingresalo en la casilla de abajo</p>
          <div class="input-group mb-4 border rounded-pill p-2">
            <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
            <div class="input-group-append border-0">
              <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Aplicar cupon</button>
            </div>
          </div>
        </div>
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instrucciones para el envio</div>
        <div class="p-4">
          <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
          <textarea name="" cols="30" rows="2" class="form-control"></textarea>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
        <div class="p-4">
          <p class="font-italic mb-4">Los costos de envio y adicionales son calculados basados en los valores de los productos.</p>
          <ul class="list-unstyled mb-4">
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Subtotal </strong><strong>$390.00</strong></li>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Envio</strong><strong>$10.00</strong></li>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Impuestos</strong><strong>$0.00</strong></li>
            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
              <h5 class="font-weight-bold">$400.00</h5>
            </li>
          </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Proceder al checkout</a>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
    </section>

  </main>
  <!-- EndMain -->

  <!-- Footer -->
  <footer class="justify-content-center">

    <?php require_once "../modules/footer.php";?>

  </footer>
  <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
