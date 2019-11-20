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
  <title> BookStore | Shop</title>

</head>

<body>

  <!-- Header -->
  <header id="header" class="__background-productos">

    <?php require_once("../modulos/navigationBar.php"); ?>

    <!-- TextHeader -->
    <section class="__header-productos">
      <div class="container">
        <div class="row">
          <article class="col-12">
            <div class="pl-4">
              <h1 class="text-uppercase text-center">SHOP</h1>
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
            <li class="breadcrumb-item"><a class="text-reset" href="#">Home</a></li>
            <li class="breadcrumb-item"><a class="text-reset" href="#">Libros</a></li>
            <li class="breadcrumb-item active" aria-current="page">All</li>
          </ol>
        </nav>
      </div>
      <!-- EndPath -->

      <!-- Filtro -->
      <div class="row __filtro">

        <div class="col-12 col-md-7">
          <p class="text-center text-md-right mt-md-2 mt-lg-2">Mostrando 1-12 resultados de 40</p>
        </div>

        <div class="col-12 col-md-5">
          <form class="form-inline my-2 my-lg-0 ml-auto justify-content-center justify-content-md-right">
            <label class="pr-3" for="filtro">Filtrar por: </label>
            <select name="filtro" id="filtro" class="form-control-sm" id="exampleFormControlSelect1">
              <option value="">Precio</option>
              <option value="">Paginas</option>
              <option>Año</option>
              <option>Mas vendidos</option>
              <option>Menos vendidos</option>
            </select>
          </form>
        </div>

      </div>
      <!-- EndFiltro -->


      <div class="row">
        <div class="offset-1 col-10 offset-md-0 col-md-4 col-lg-3">

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
              <a href="products.php">Ciencia Ficcions</a>
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

        <!-- Productos-->
        <div class="product-grid col-md-8 col-lg-9">

          <div class="row">

            <!-- Producto-->
            <div class="offset-1 col-10  offset-md-0 col-md-6 col-lg-3">
              <div class="__tarjeta-producto shadow rounded">

                <div class="__favorito position-absolute m-2">
                  <a class="text-reset" href=""> <i class="fas fa-heart"> </a></i>
                </div>

                <img class="rounded w-100" src="../img/libros-portadas/sun-book.jpg" alt="The Sun Portada">
                <h2 class="__titulo-producto pt-2"><a class="text-reset" href="singleProduct.php">The Sun, The Monn, The Stars</a></h2>
                <p>by <span>Junot Diaz</span></p>
                <p class="__precio-producto">$19.99</p>
                <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae cupiditate nisi fuga nam iusto commodi!</p>
                <p>
                  <button class="rounded-bottom">
                    Add to Cart
                  </button>
                </p>
              </div>
            </div>
            <!-- EndProducto-->

            <!-- Producto-->
            <div class="offset-1 col-10 offset-md-0 col-md-6 col-lg-3">
              <div class="__tarjeta-producto shadow rounded">

                <div class="__favorito position-absolute m-2">
                  <a class="text-reset" href=""> <i class="fas fa-heart"> </a></i>
                </div>

                <img class="rounded w-100" src="../img/libros-portadas/killer-book.jpg" alt="The Killer Poison Portada">
                <h2 class="__titulo-producto pt-2"><a class="text-reset" href="singleProduct.php">The Killer Poison</a></h2>
                <p>by <span>Julie Martinez</span></p>
                <p class="__precio-producto">$179.99</p>
                <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae cupiditate nisi fuga nam iusto commodi!</p>
                <p>
                  <button class="rounded-bottom">
                    Add to Cart
                  </button>
                </p>
              </div>
            </div>
            <!-- EndProducto-->

            <!-- Producto-->
            <div class="offset-1 col-10 offset-md-0 col-md-6 col-lg-3">
              <div class="__tarjeta-producto shadow rounded">

                <div class="__favorito position-absolute m-2">
                  <a class="text-reset" href=""> <i class="fas fa-heart"> </a></i>
                </div>

                <img class="rounded w-100" src="../img/libros-portadas/busi-book.jpg" alt="Bussines Portada">
                <h2 class="__titulo-producto pt-2"><a class="text-reset" href="singleProduct.php">Creative Businnes</a></h2>
                <p>by <span>Jen Brazel</span></p>
                <p class="__precio-producto">$600.00</p>
                <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae cupiditate nisi fuga nam iusto commodi!</p>
                <p>
                  <button class="rounded-bottom">
                    Add to Cart
                  </button>
                </p>
              </div>
            </div>
            <!-- EndProducto-->

            <!-- Producto-->
            <div class="offset-1 col-10 offset-md-0 col-md-6 col-lg-3">
              <div class="__tarjeta-producto shadow rounded">

                <div class="__favorito position-absolute m-2">
                  <a class="text-reset" href=""> <i class="fas fa-heart"> </a></i>
                </div>

                <img class="rounded w-100" src="../img/libros-portadas/smile-book.jpg" alt="Smile Portada">
                <h2 class="__titulo-producto pt-2"><a class="text-reset" href="singleProduct.php">The last smile in Sunder City</a></h2>
                <p>by <span>Luke Arnold</span></p>
                <p class="__precio-producto">$600.00</p>
                <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae cupiditate nisi fuga nam iusto commodi!</p>
                <p>
                  <button class="rounded-bottom">
                    Add to Cart
                  </button>
                </p>
              </div>
            </div>
            <!-- EndProducto-->

            <!-- Producto-->
            <div class="offset-1 col-10 offset-md-0 col-md-6 col-lg-3">
              <div class="__tarjeta-producto shadow rounded">

                <div class="__favorito position-absolute m-2">
                  <a class="text-reset" href=""> <i class="fas fa-heart"> </a></i>
                </div>

                <img class="rounded w-100" src="../img/libros-portadas/olio-book.jpg" alt="Olio Portada">
                <h2 class="__titulo-producto pt-2"><a class="text-reset" href="singleProduct.php">OLIO</a></h2>
                <p>by <span>Madhu Sashon</span></p>
                <p class="__precio-producto">$600.00</p>
                <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae cupiditate nisi fuga nam iusto commodi!</p>
                <p>
                  <button class="rounded-bottom">
                    Add to Cart
                  </button>
                </p>
              </div>
            </div>
            <!-- EndProducto-->

            <!-- Producto-->
            <div class="offset-1 col-10 offset-md-0 col-md-6 col-lg-3">
              <div class="__tarjeta-producto shadow rounded">

                <div class="__favorito position-absolute m-2">
                  <a class="text-reset" href=""> <i class="fas fa-heart"> </a></i>
                </div>

                <img class="rounded w-100" src="../img/libros-portadas/teaching-book.jpg" alt="Teaching Portada">
                <h2 class="__titulo-producto pt-2"><a class="text-reset" href="singleProduct.php">Teching Book</a></h2>
                <p>by <span>Weston D. and Clay B.</span></p>
                <p class="__precio-producto">$179.40</p>
                <p class="px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae cupiditate nisi fuga nam iusto commodi!</p>
                <p>
                  <button class="rounded-bottom">
                    Add to Cart
                  </button>
                </p>
              </div>
            </div>
            <!-- EndProducto-->


          </div>

        </div>
        <!-- EndProductos-->
      </div>

      <!-- Paginacion-->
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="Paginacion">
              <ul class="pagination justify-content-end">
                <li class="page-item">
                  <a class="page-link text-reset" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link text-reset" text-reset href="#">1</a></li>
                <li class="page-item"><a class="page-link text-reset" text-reset href="#">2</a></li>
                <li class="page-item"><a class="page-link text-reset" text-reset href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link text-reset" text-reset href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- EndPaginacion-->

    </section>

  </main>
  <!-- EndMain -->

  <!-- Footer -->
  <footer class="justify-content-center">

    <?php require_once("../modulos/footer.php"); ?>

  </footer>
  <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
