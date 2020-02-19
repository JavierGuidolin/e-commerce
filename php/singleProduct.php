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
  <title> BookStore | Home</title>

</head>

<body>

  <!-- Header -->
  <header class="__background-detalle-producto">

    <?php require_once "../modules/navigationBar.php";?>

    <section class="__header-detalle-producto">
      <div class="container">
        <div class="row">
          <article class="col-12">
            <div class="pl-4">
              <h1 class="text-uppercase text-center">SINGLE PRODUCT</h1>
              <blockquote class="blockquote text-center">
                <p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="text-white-50 blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>
          </article>
        </div>
      </div>
    </section>

  </header>
  <!-- EndHeader -->

  <!-- Main -->
  <main>
    <div class="container">

      <!-- Path -->
      <div class="mt-5">
        <nav aria-label="breadcrumb ">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-reset" href="#">Home</a></li>
            <li class="breadcrumb-item"><a class="text-reset" href="#">Libros</a></li>
            <li class="breadcrumb-item active" aria-current="page">Killer Book</li>
          </ol>
        </nav>
      </div>
      <!-- EndPath -->

      <div class="row">
        <div class="col-12 offset-md-3 col-md-6 offset-lg-0 col-lg-4">

          <!--Carousel-->
          <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block w-100 rounded" src="../img/libros-portadas/killer-book.jpg" alt="Caratula del Libro">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 rounded" src="../img/libros-portadas/olio-book.jpg" alt="Primera Pagina">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 rounded" src="../img/libros-portadas/killer-book.jpg" alt="Tapa Trasera">
              </div>
            </div>
            <!--EndSlides-->

            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <!--EndControls-->

            <ol class="carousel-indicators">
              <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="../img/libros-portadas/killer-book.jpg" class="img-fluid"></li>
              <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100 img-fluid" src="../img/libros-portadas/olio-book.jpg"></li>
              <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100 img-fluid" src="../img/libros-portadas/killer-book.jpg"></li>
            </ol>
          </div>
          <!--EndCarousel-->
        </div>

        <!--InfoProducto-->
        <div class="col-12 col-md-12 col-lg-4 mt-5 mt-lg-0">
          <div class="info text-md-center">
            <h2>The Killer Poison</h2>
            <p class="pt-2 __icono-info-producto">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </p>
            <h2>$52.00</h2>
            <p class="mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
              ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <form class="mt-4 text-md-center" action="" method="">
              <label for="Cantidad">Cantidad: </label>
              <input type="text" class="__input-cantidad" id="Cantidad" name="cantidad" value="" placeholder="1">
              <button class="__boton-añadir text-uppercase" type="button" name="button">Añadir!</button>
            </form>

            <p class="mt-3">Categorias: <a href="products.php">Adventure</a>, <a href="products.php">Kids Music</a></p>
            <p class="mt-3 __icono-share">Share:
              <a href="https://twitter.com"><i class="__icono-info-producto fab fa-twitter"></i></a>
              <a href="https://facebook.com"><i class="__icono-info-producto fab fa-facebook-f"></i></a>
              <a href="https://linkedin.com"><i class="__icono-info-producto fab fa-linkedin-in"></i></a>
            </p>

            <hr class="mt-3">

          </div>
        </div>
        <!--EndInfoProducto-->

        <!--Categorias-->
        <div class="d-none d-lg-block col-lg-4">
          <!-- Categorias -->
          <h2 class="pb-2 __etiquetas-titulo">Categorias</h2>
          <ul class="list-group pt-1">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="products.php">Humor</a>
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="products.php">Fantasia</a>
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="products.php">Ciencia Ficcion</a>
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="products.php">Kids</a>
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="products.php">Arte</a>
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="products.php">Negocios</a>
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="products.php">Autoayuda</a>
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="products.php">Horror</a>
              <span class="badge badge-primary badge-pill">1</span>
            </li>
          </ul>
          <!-- EndCategorias -->

          <!-- Etiquetas -->
          <div class="mt-3 mb-3">
            <h2 class="pb-2 __etiquetas-titulo">Tags</h2>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Humor</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Terror</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Junot Diaz</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Negocios</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Autoayuda</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Julie Martinez</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Ciencia Ficcion</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Negocios</a>
          </div>
          <!-- EndEtiquetas -->


        </div>


        <!--Review-->
        <div class="col-12 mt-2 mt-lg-5">

          <!--PanelReview-->
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="text-reset nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Detalles</a>
              <a class="text-reset nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews</a>
            </div>
          </nav>
          <!--EndPanelReview-->

          <!--ReviewDetalles -->
          <div class="tab-content mb-5" id="nav-tabContent">
            <div class="text-justify tab-pane fade show active pt-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
              aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
              non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <!--ReviewDetalles-->

            <!--ReviewReviews-->
            <div class="tab-pane fade pt-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

              <div class="review">
                <div class="card-columns">

                  <!--1° review-->
                  <div class="card __tarjeta-review mb-3">
                    <div class="card-header">Juanito</div>
                    <div class="card-body text-secondary">
                      <h5 class="card-title">Excelente Libro</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi atque facere laboriosam totam vero voluptates earum impedit, saepe, debitis nulla ut, enim id dignissimos nemo delectus reprehenderit
                        maiores quae magni!</p>
                    </div>
                  </div>
                  <!--End 1° review-->

                  <div class="card __tarjeta-review mb-3">
                    <div class="card-header">Jon</div>
                    <div class="card-body text-secondary">
                      <h5 class="card-title">Excelente Libro</h5>
                      <p class="card-text">Lorem ipsum dolor, saepe, debitis nulla ut, enim id dignissimos nemo delectus reprehenderit
                        maiores quae magni!</p>
                    </div>
                  </div>

                </div>

                <hr class="__hr">

                <!--Mi Review-->
                <div class="__mi-review">
                  <h2 class="text-center">Estas haciendo la review de: The Killer Poison</h2>

                  <form class="col-12 offset-lg-3 col-lg-6" action="index.html" method="post">
                    <div class="form-group">
                      <label for="nickname">Nickname:</label>
                      <input name="nickname" type="email" class="form-control" id="nickname" aria-describedby="emailHelp" placeholder="@nickname">
                    </div>

                    <div class="form-group">
                      <label for="reviewStars">Calificacion: </label>
                      <select id="reviewStars" name="reviewStars" class="form-control">
                        <option value="1Star">☆</option>
                        <option value="2Star">☆☆</option>
                        <option value="3Star">☆☆☆</option>
                        <option value="4Star">☆☆☆☆</option>
                        <option value="5Star">☆☆☆☆☆</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="reviewText">Review:</label>
                      <textarea id="reviewText" class="form-control" name="reviewText" rows="5"></textarea>
                      <small id="HelpReview" class="form-text text-muted">Da tu punto de vista!</small>
                    </div>

                    <div class="form-group">
                      <button type="button" class="mt-2 __boton-enviar-review text-uppercase" name="button">Enviar Review</button>
                    </div>

                  </form>

                </div>
                <!--EndMiReview-->

              </div>
              <!--EndReviewReviews-->

            </div>
          </div>

        </div>
      </div>
    </div>
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
