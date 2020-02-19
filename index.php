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
  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" type="image/png" href="img/bs-favicon.png" />
  <title> BookStore | Home</title>

</head>

<body>

  <!-- Header -->
  <header id="header" class="__background-home">

    <!-- Navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top">

      <a href="index.php" class="navbar-brand">
        <img class="__logo" src="img/bs-logo.png" alt="Logo BookStore">
      </a>

      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <i class="fas fa-bars"></i>
      </button>

      <div id="navbarCollapse" class="collapse navbar-collapse">

        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="__icono-nav fas fa-home pr-2"></i> Inicio</a>
          </li>

          <li class="nav-item">
            <a href="php/faq.php" class="nav-link">
              <i class="__icono-nav fas fa-question-circle pr-2"></i> FAQ</a>
          </li>

          <li class="nav-item">
            <a href="php/faq.php" class="nav-link">
              <i class="__icono-nav fas fa-users pr-2"></i> Quienes somos</a>
          </li>

          <li class="nav-item">
            <a href="php/contact.php" class="nav-link">
              <i class="__icono-nav far fa-id-card pr-2"></i> Contacto</a>
          </li>

          <li class="nav-item">
            <a href="php/products.php" class="nav-link">
              <i class="__icono-nav fas fa-book pr-2"></i> Books</a>
          </li>

        </ul>

        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">

            <a href="php/cart.php" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="__icono-carrito fas fa-shopping-cart"></i>
            </a>

            <div class="dropdown-menu">
              <a href="php/cart.php" class="dropdown-item pl-2">
                <i class="dropdown-icon fas fa-gift pr-2"></i> Wish list</a>
              <a href="php/cart.php" class="dropdown-item pl-2">
                <i class="dropdown-icon fas fa-shipping-fast pr-2"></i>Pedidos</a>
              <a href="php/cart.php" class="dropdown-item pl-2">
                <i class="dropdown-icon fas fa-thumbs-down pr-2"></i> Cancelar pedido</a>
            </div>
          </li>

          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0">
              <div class="input-group input-group-sm mb-1">
                <input type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-outline-secondary" type="button"> <i class="fas fa-search"></i> </button>
                </div>
              </div>
            </form>
          </li>

          <li class="nav-item dropdown">

            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="__icono-usuario fas fa-user-circle pr-1 pl-2"></i>
              <?php
if ($_SESSION) {
    echo $_SESSION["name"];
} else {
    echo "Perfil";
}
?>
            </a>


               <div class="dropdown-menu dropdown-menu-right">
                 <?php if ($_SESSION): ?>
                   <a href="php/userAccount.php" class="dropdown-item pl-2"><i class="dropdown-icon fas fa-sign-in-alt pr-2"></i> Mi cuenta</a>
                   <div class="dropdown-divider"></div>
                   <a href="php/logout.php"  class="dropdown-item pl-2"><i class="fas fa-door-open pr-2"></i>Salir</a>
                 <?php else: ?>
                   <a href="php/register.php" class="dropdown-item pl-2 "><i class="dropdown-icon fas fa-user-edit pr-2"></i> Registrarse</a>
                   <a href="php/login.php" class="dropdown-item pl-2"><i class="dropdown-icon fas fa-sign-in-alt pr-2"></i> Iniciar sesion</a>
                 <?php endif;?>
               </div>

          </li>
        </ul>
      </div>

    </nav>
    <!-- Navegacion -->

    <!-- TextHeader -->
    <section class="__header-home">
      <div class="container">
        <div class="row">
          <article class="col-xs-6 col-md-6 col-xl-6">
            <div class="pl-4">
              <h1 class="text-uppercase"><span>B</span>ook<span>S</span>tore</h1>
              <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt.</h2>
              <h3><a class="text-reset" href="php/products.php">Comprar Ahora! <i class="fas fa-arrow-circle-right"></i></a></h3>
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

    <!-- BestSellers -->
    <section>
      <div class="container">
        <div class="row">

          <div class="col-xs-6 col-md-12">
            <div class="text-center p-3 pl-2 mt-5">
              <h3>Bestsellers</h3>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe neque veritatis velit praesentium magnam dolore commodi qui quas fuga, tempora quidem corporis, accusantium architecto, quam.</p>
            </div>
          </div>
        </div>

        <div class="card-columns">

          <!-- Libro -->
          <div class="card __tarjeta-libro-home">
            <img src="img/libros-portadas/busi-book.jpg" class="card-img-top" alt="Businnes Portada">
            <div class="card-body">
              <h5 class="card-title text-center text-center">Creative Business Book</h5>
              <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur accusamus debitis possimus temporibus dolorum, minus harum hic veniam, magni a, laboriosam qui deserunt, sunt reprehenderit!</p>
            </div>
          </div>
          <!-- EndLibro -->

          <!-- Libro -->
          <div class="card __tarjeta-libro-home">
            <img src="img/libros-portadas/olio-book.jpg" class="card-img-top" alt="Olio Portada">
            <div class="card-body">
              <h5 class="card-title text-center">Olio</h5>
              <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet nobis ut quis ea, maxime illum!</p>
            </div>
          </div>
          <!-- EndLibro -->

          <!-- Libro -->
          <div class="card __tarjeta-libro-home">
            <img src="img/libros-portadas/smile-book.jpg" class="card-img-top" alt="Smile Portada">
            <div class="card-body">
              <h5 class="card-title text-center">The last smile in Sunder City</h5>
              <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, quibusdam. Assumenda.</p>
            </div>
          </div>
          <!-- EndLibro -->

          <!-- Libro -->
          <div class="card __tarjeta-libro-home">
            <img src="img/libros-portadas/sun-book.jpg" class="card-img-top" alt="Sun Portada">
            <div class="card-body">
              <h5 class="card-title text-center">The Sun, The Moon, The Stars</h5>
              <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
          </div>
          <!-- EndLibro -->

          <!-- Libro -->
          <div class="card __tarjeta-libro-home">
            <img src="img/libros-portadas/killer-book.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">The Killer Poison</h5>
              <p class="card-text text-center">Lorem ipum dolor sit amet, consectetur adipisicing elit. Nulla, quibusdam. Assumenda.</p>
            </div>
          </div>
          <!-- EndLibro -->

          <!-- Libro -->
          <div class="card __tarjeta-libro-home">
            <img src="img/libros-portadas/teaching-book.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Unleashing Great Teaching</h5>
              <p class="card-text text-center">Consectetur adipisicing elit. Mollitia necessitatibus neque molestiae corporis consequatur numquam, eveniet provident explicabo suscipit beatae sunt possimus voluptatum, aperiam voluptas officia odit ex
                et rem?</p>
            </div>
          </div>
          <!-- EndLibro -->

        </div>
      </div>
    </section>
    <!-- EndBestSellers -->

    <!-- Newsletter -->
    <section class="__newsletter" class="mt-5 mb-5">
      <div class="container">
        <div class="col-lg-7 offset-lg-5 col-md-7 offset-md-5 col-12">
          <div class="text-center">
            <h2>Stay With Us</h2>
          </div>
          <div class=" text-center">
            <p>Suscribite a nuestro newsletter y esta al Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet temporibus cumque ipsum, at quos! Laudantium sequi, illo quis eaque amet deserunt sed tenetur sunt sint earum iusto ipsam,
              excepturi repudiandae?</p>
            <form action="#">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Ingresa tu email..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Suscribirse</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Newsletter -->

  </main>
  <!-- EndMain -->

  <!-- Footer -->
  <footer class="justify-content-center">

    <div class="__social-links">
      <div class="container">

        <div class="row py-4 d-flex align-items-center">

          <div class="__social-links col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Seguinos en nuestras redes sociales!</h6>
          </div>

          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a href="https://facebook.com">
              <i class="fab fa-facebook-f text-white mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a href="https://twitter.com">
              <i class="fab fa-twitter text-white mr-4"> </i>
            </a>
            <!-- Google +-->
            <a href="https://google.com" class="gplus-ic">
              <i class="fab fa-google-plus-g text-white mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a href="https://linkedin.com" class="li-ic">
              <i class="fab fa-linkedin-in text-white mr-4"> </i>
            </a>
            <!--Instagram-->
            <a href="https://instagram.com" class="ins-ic">
              <i class="fab fa-instagram text-white"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Lorem ipsum.</h6>
          <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto">
          <p> Lorem ipsum dolor sit amet,consectetur adipisicing elit.</p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Productos</h6>
          <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto">
          <p><a href="php/products.php">Lorem dolor.</a></p>
          <p><a href="php/products.php">Lorem ipsum dolor.</a></p>
          <p><a href="php/products.php">Lorem dolor.</a></p>
          <p><a href="php/products.php">Lorem ipsum dolor.</a></p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Links utiles</h6>
          <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto">
          <p><a href="php/userAccount.php">Tu cuenta</a></p>
          <p><a href="php/faq.php">Formas de pago</a></p>
          <p><a href="php/faq.php">Informacion sobre envios</a></p>
          <p><a href="php/faq.php">Ayuda</a></p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contacto</h6>
          <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto">
          <p><i class="fas fa-home mr-3"></i> MENDOZA, ARGENTINA</p>
          <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="index.php">BookStore</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
