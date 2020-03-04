@extends('plantilla')
 @section('titulo')
   Inicio
 @endsection
 @section('principal')

<header id="header" class="__background-home">
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

@endsection
