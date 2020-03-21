<!DOCTYPE html>
<html lang="es" dir="ltr">

    <head>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="description" content="BookStore, es una tienda de venta de libros."/>

      <link href="https://fonts.googleapis.com/css?family=Lato|Lora&display=fallback" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Merriweather:700,300&display=fallback" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=PT+Serif:700&display=fallback" rel="stylesheet">
      <script src="https://kit.fontawesome.com/7c3c4957c1.js" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="/css/app.css">   
      <!--<link rel="stylesheet" href="/css/style.css">-->
      <link rel="stylesheet" href="/css/partials/navbar.css">
      <link rel="stylesheet" href="/css/partials/footer.css">
      <link rel="stylesheet" href="/css/partials/main.css">
      
      @yield('styles')
      
      <link rel="shortcut icon" type="image/png" href="../img/bs-favicon.png" />
      <title> BookStore | @yield('titulo')</title>

    </head>

  <body>

    <header>

      <!-- Navegacion -->

      <div class="container">
        <div class="row">

            <div class="col-sm-12">

                <div class="row">

                    <!-- Logo -->
                    <div class="col-12 col-md-4">
                        <div class="p-4 text-center">
                            <a href="/" href="#">
                                <img class="__logo" src="/img/bookStoreLogo.svg" alt="BookStore Logo">
                            </a>
                        </div>
                    </div>
                    <!-- Logo -->

                    <!-- Search -->
                    <div class="col-12 col-md-5">

                        <div class="d-flex justify-content-center align-items-center flex-nowrap h-100">

                            <form class="__header-search-form rounded-pill mx-auto w-100">
                                <input class="__search-input p-3" type="text" id="search"
                                    placeholder="Buscar en BookStore..." />
                                <button name="search" class="__search-button"  aria-label="buscar">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>

                        </div>

                    </div>
                    <!-- Search -->

                    <!-- Account -->
                    <div class="col-sm-12 col-md-3">

                        <div class="__user-info h-100 d-flex justify-content-center align-items-center flex-column">
                            
                            @auth
                                <div class="pt-3 text-center">
                                    <i class="fas fa-user"></i>
                                    <a class="" href="/home">Hola {{Auth::user()->name}}</a> | 
                                    <a class="" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Salir') }}
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            @endauth

                            @guest
                                <div class="pt-3 text-center">
                                    <i class="fas fa-user"></i>
                                    <a class="" href="/login">Login</a> | <a class=""
                                        href="/register">Register</a>
                                </div>
                            @endguest

                            <div class="pt-3">
                                <div class="text-center text-md-left">
                                    <i class="fas fa-shopping-cart position-relative ">
                                        <span class="__items position-absolute">10</span>
                                    </i>
                                    <a class="pl-3" href="/carrito">Carrito</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                     <!-- Account -->

                </div>

            </div>

        </div>

    </div>
</div>

    <!-- Nav Categorias -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-lg-center mx-auto text-uppercase">
                <li class="nav-item __cool-link">
                    <a class="nav-link " href="/productos">Arte & Fotografia</a>
                </li>
                <li class="nav-item __cool-link">
                    <a class="nav-link pt-lg-3 pt-xl-2" href="/productos">Biografias</a>
                </li>
                <li class="nav-item __cool-link">
                    <a class="nav-link pt-lg-3 pt-xl-2" href="/productos">Negocios</a>
                </li>
                <li class="nav-item __cool-link">
                    <a class="nav-link pt-lg-3 pt-xl-2" href="/productos">Cocina</a>
                </li>
                <li class="nav-item __cool-link">
                    <a class="nav-link pt-lg-3 pt-xl-2" href="/productos">Humor</a>
                </li>
                <li class="nav-item __cool-link">
                    <a class="nav-link pt-lg-3 pt-xl-2" href="/productos">Historia</a>
                </li>
                <li class="nav-item __cool-link">
                    <a class="nav-link pt-lg-3 pt-xl-2" href="/productos">Religión</a>
                </li>
                <li class="nav-item __cool-link">
                    <a class="nav-link" href="/productos">Sci-Fi & Fantasia</a>
                </li>
                <li class="nav-item __cool-link">
                    <a class="nav-link" href="/productos">Auto-Ayuda</a>
                </li>
                <li class="nav-item __cool-link">
                    <a class="nav-link" href="/productos">Misterio & Crimen</a>
                </li>
                <li class="nav-item __cool-link">
                    <a class="nav-link pt-lg-3 pt-xl-2" href="/productos">Deportes</a>
                </li>

            </ul>
        </div>
    </nav>
     <!-- Nav Categorias -->
</header>

 <!-- Main Section -->
    @yield('principal')
 <!-- Main Section -->

<!-- Footer -->
<footer>
  <div class="__social-links">
      <div class="container">

          <div class="row py-4 d-flex align-items-center">

              <div class="__social-links col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                  <h6 class="mb-0 font-weight-bold text-dark">Seguinos en nuestras redes sociales!</h6>
              </div>

              <div class="col-md-6 col-lg-7 text-center text-md-right">

                  <!-- Facebook -->
                  <a href="https://facebook.com" aria-label="Facebook">
                      <i class="fab fa-facebook-f text-white mr-4"> </i>
                  </a>
                  <!-- Twitter -->
                  <a href="https://twitter.com" aria-label="Twitter">
                      <i class="fab fa-twitter text-white mr-4"> </i>
                  </a>
                  <!-- Google +-->
                  <a href="https://google.com" class="gplus-ic" aria-label="Google +">
                      <i class="fab fa-google-plus-g text-white mr-4"> </i>
                  </a>
                  <!--Linkedin -->
                  <a href="https://linkedin.com" class="li-ic" aria-label="Linkedin">
                      <i class="fab fa-linkedin-in text-white mr-4"> </i>
                  </a>
                  <!--Instagram-->
                  <a href="https://instagram.com" class="ins-ic" aria-label="Instagram">
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
              <p><a class="" href="products.php">Lorem dolor.</a></p>
              <p><a href="products.php">Lorem ipsum dolor.</a></p>
              <p><a href="products.php">Lorem dolor.</a></p>
              <p><a href="products.php">Lorem ipsum dolor.</a></p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">Links utiles</h6>
              <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto">
              <p><a href="/home">Tu cuenta</a></p>
              <p><a href="/contacto">Contacto</a></p>
              <p><a href="/faq">Ayuda</a></p>
              <p><a href="/faq">Quienes Somos</a></p>

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
      <a href="../index.php">BookStore</a>
  </div>
  <!-- Copyright -->

</footer>

<!-- End Footer -->

 <!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
crossorigin="anonymous"></script>

 <!-- Nav Categorias -->


<!-- Scripts --> 
    @yield('scripts')
<!-- Scripts -->

  </body>
</html>
