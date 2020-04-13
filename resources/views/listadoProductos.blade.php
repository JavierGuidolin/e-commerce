@extends('layouts.plantilla')

@section('styles')
  <link rel="stylesheet" href="/css/list-products.css">
@endsection

@section('titulo')
   Libros
@endsection

 @section('principal')
 <main>

  <section>

      <div class="container">

        <!-- Filter input -->
        <div class="form-group row mt-3">

            <label for="inputPassword3" class="col-4 offset-md-7 col-md-2 col-form-label">Filtrar por:</label>
            <div class="col-8 col-md-3">
                <select id="inputState" class="form-control __filter-input">
                <option selected>A - Z</option>
                <option>Precio</option>
                <option>News</option>
                <option>???</option>
                <option>???</option>
                </select>
            </div>

        </div>
         <!-- Filter input -->

        <div class="row">

              <div class="col-5 col-md-3">

                 <!-- Filter side -->
                  <div class="__filter-side my-3 border-right">

                      <div class="pb-4 border-bottom">
                          <h3 class="text-uppercase font-weight-bold pb-3">Favoritos</h3>
                          <p><a href="">Best Sellers</a></p>
                          <p><a href="">Nuevos</a></p>
                          <p><a href="">Proximamente</a></p>
                      </div>

                      <div class="pt-5">
                          <h3 class="text-uppercase font-weight-bold pb-3">Categorias</h3>
                          <p><a href="">Arte & Fotografia</a></p>
                          <p><a href="">Biografias</a></p>
                          <p><a href="">Negocios</a></p>
                          <p><a href="">Cocina</a></p>
                          <p><a href="">Humor</a></p>
                          <p><a href="">Historia</a></p>
                          <p><a href="">Religion</a></p>
                          <p><a href="">Sci-Fi & Fantasia</a></p>
                          <p><a href="">Auto-Ayuda</a></p>
                          <p><a href="">Misterio & Crimen</a></p>
                          <p><a href=""> Deportes</a></p>
                      </div>

                  </div>
                <!-- Filter input -->

              </div>

              <div class="col-7 col-md-9">

                  <div class="my-3">
                      <div class="row">
                          <div class="java" id="cart-products">

                          </div>






                          <!-- Producto -->
                          <div class="offset-1 col-10 col-md-4 offset-md-0 col-lg-3">
                              <div class="px-2 px-xl-4 item">
                                  <div class="__cover-bestseller">
                                      <img class="w-100 mx-auto " src="/img/libros-portadas/the-girl-in-red.webp" alt="">
                                      <div class="__options pb-2">

                                          <a class="__options-add-to-cart mr-1 mb-1" href="#" id="addItem" onclick="return añadir()">
                                              <i class="fas fa-shopping-bag"></i>
                                              <span>BUY</span>
                                          </a>
                                          <a class="__options-add-to-fav mr-1" href="#">
                                              <i class="far fa-heart"></i>
                                          </a>

                                      </div>
                                  </div>
                                  <div class="pt-3">
                                      <h3 class="text-center font-weight-bold">
                                          <a href="" id="title">The girl in red</a>
                                        </h3>
                                      <h6 class="text-center" id="autor">by Chloe Hooper</h6>
                                      <h3 class="text-center" id="price">27.99</h3>
                                  </div>
                              </div>
                          </div>
                          <!-- Producto -->




                          <!-- Producto -->
                          <div class="offset-1 col-10 col-md-4 offset-md-0 col-lg-3">
                            <div class="px-2 px-xl-4 item">
                                <div class="__cover-bestseller">
                                    <img class="w-100 mx-auto " src="/img/libros-portadas/the-arsonist.webp" alt="">
                                    <div class="__options pb-2">

                                        <a class="__options-add-to-cart mr-1 mb-1" href="#">
                                            <i class="fas fa-shopping-bag"></i>
                                            <span>BUY</span>
                                        </a>
                                        <a class="__options-add-to-fav mr-1" href="#">
                                            <i class="far fa-heart"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="pt-3">
                                    <h3 class="text-center font-weight-bold">
                                        <a href="">The arsonist</a>
                                      </h3>
                                    <h6 class="text-center">by Chloe Hooper</h6>
                                    <h3 class="text-center">$ 27.99</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Producto -->


                          <!-- Producto -->
                          <div class="offset-1 col-10 col-md-4 offset-md-0 col-lg-3">
                            <div class="px-2 px-xl-4 item">
                                <div class="__cover-bestseller">
                                    <img class="w-100 mx-auto " src="/img/libros-portadas/very-nice.webp" alt="">
                                    <div class="__options pb-2">

                                        <a class="__options-add-to-cart mr-1 mb-1" href="#">
                                            <i class="fas fa-shopping-bag"></i>
                                            <span>BUY</span>
                                        </a>
                                        <a class="__options-add-to-fav mr-1" href="#">
                                            <i class="far fa-heart"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="pt-3">
                                    <h3 class="text-center font-weight-bold">
                                        <a href="">Very Nice</a>
                                      </h3>
                                    <h6 class="text-center">by Chloe Hooper</h6>
                                    <h3 class="text-center">$ 27.99</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Producto -->

                        <!-- Producto -->
                         <div class="offset-1 col-10 col-md-4 offset-md-0 col-lg-3">
                            <div class="px-2 px-xl-4 item">
                                <div class="__cover-bestseller">
                                    <img class="w-100 mx-auto " src="/img/libros-portadas/the-arsonist.webp" alt="">
                                    <div class="__options pb-2">

                                        <a class="__options-add-to-cart mr-1 mb-1" href="#">
                                            <i class="fas fa-shopping-bag"></i>
                                            <span>BUY</span>
                                        </a>
                                        <a class="__options-add-to-fav mr-1" href="#">
                                            <i class="far fa-heart"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="pt-3">
                                    <h3 class="text-center font-weight-bold">
                                        <a href="">The arsonist</a>
                                      </h3>
                                    <h6 class="text-center">by Chloe Hooper</h6>
                                    <h3 class="text-center">$ 27.99</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Producto -->

                         <!-- Producto -->
                         <div class="offset-1 col-10 col-md-4 offset-md-0 col-lg-3">
                            <div class="px-2 px-xl-4 item">
                                <div class="__cover-bestseller">
                                    <img class="w-100 mx-auto " src="/img/libros-portadas/there-there.webp" alt="">
                                    <div class="__options pb-2">

                                        <a class="__options-add-to-cart mr-1 mb-1" href="#">
                                            <i class="fas fa-shopping-bag"></i>
                                            <span>BUY</span>
                                        </a>
                                        <a class="__options-add-to-fav mr-1" href="#">
                                            <i class="far fa-heart"></i>
                                        </a>

                                    </div>
                                </div>
                                <div class="pt-3">
                                    <h3 class="text-center font-weight-bold">
                                        <a href="">There There</a>
                                      </h3>
                                    <h6 class="text-center">by Chloe Hooper</h6>
                                    <h3 class="text-center">$ 27.99</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Producto -->

                      </div>
                  </div>

                  <!-- Pagination -->
                 <!--
                    <nav class="">
                      <ul class="pagination ml-auto">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                  </nav>
                -->
                <!-- Pagination -->
              </div>

          </div>


      </div>

  </section>

</main>
<script>
    console.log({!!$libros!!});
    localStorage.setItem('Libros',JSON.stringify({!!$libros!!})); //Guarda el array de libros traido de la base de datos y almacena como JSON en local storage
</script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/shoppingcart.js" charset="utf-8"></script>
@endsection
