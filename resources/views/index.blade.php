@extends('layouts.plantilla')

 @section('titulo')
   Inicio
 @endsection

 @section('styles')
    <link rel="stylesheet" href="/css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/index.css">
 @endsection

 @section('principal')

 <main>

  <!-- Hero Section -->
  <section class="__hero-index col-12">

      <div class="__hero-data pl-4 pt-2 h-100">
          <p class="text-uppercase animated fadeInDown delay-1s">a sofa,</p>
          <p class="text-uppercase animated fadeInDown delay-2s">a good book,</p>
          <p class="text-uppercase animated fadeInDown delay-3s">and you.</p>
      </div>

  </section>
  <!-- End Hero Section -->

  <!-- Welcome Section -->
  <section class="__welcome">

      <div class="container py-5">

          <div class="row">
              <div class="col-12 col-md-10 offset-md-1 mb-5">
                  <h1 class="text-center font-weight-bold pt-3">WELCOME TO BOOKSTORE</h1>
                  <h2 class="text-center pt-3">
                      " Lorem ipsum dolor sit amet consectetur, <b>adipisicing elit. Iure molestiae quae est
                          repudiandae
                          eum!
                          Facere error beatae praesentium similique</b> fuga eos illum deleniti consectetur?
                      Deserunt."
                  </h2>
              </div>
          </div>


          <div class="row">

              <div class="offset-1 col-10 col-md-4 offset-md-0 text-center __welcome-options">
                  <i class="fas fa-book p-3 animated pulse infinite"></i>
                  <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, sapiente. Facere
                      omnis error accusamus unde modi corporis laborum. Accusamus, sequi.
                  </p>
            </div>


              <div class="offset-1 col-10 col-md-4 offset-md-0 text-center __welcome-options">
                  <i class="fas fa-pen-alt p-3 animated pulse infinite"></i>
                  <p class="">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam dolor doloremque
                      laboriosam, delectus similique assumenda officia repellat fugiat.
                  </p>
              </div>

              <div class="offset-1 col-10 col-md-4 offset-md-0 text-center  __welcome-options ">
                  <i class="fas fa-glasses p-3 animated pulse infinite"></i>
                  <p class="">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere voluptate illum
                      dolores quibusdam sit.
                  </p>
              </div>

          </div>

      </div>

    </div>

  </section>
  <!-- End Welcome Section -->

  <!-- Bestsellers Section -->
  <section class="__betsellers">

      <div class="pt-4 pb-4">
          <h2 class="text-center">Bestsellers</h2>
      </div>

      <div class="owl-carousel owl-theme">

          <div class="item">
              <div class="__cover-bestseller">
                  <img class="w-75 mx-auto " src="/img/libros-portadas/the-arsonist.jpg" alt="">
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
                      <a href="">The girl in red</a>
                  </h3>
                  <h6 class="text-center">by Chloe Hooper</h6>
                  <h3 class="text-center">$ 27.99</h3>
              </div>
          </div>

          <div class="item">
              <div class="__cover-bestseller">
                  <img class="w-75 mx-auto " src="/img/libros-portadas/the-girl-in-red.jpg" alt="">
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
                     <a href="">The Arsonist</a>
                    </h3>
                  <h6 class="text-center">by Create Media</h6>
                  <h3 class="text-center">$ 12.99</h3>
              </div>
          </div>

          <div class="item">
              <div class="__cover-bestseller">
                  <img class="w-75 mx-auto " src="/img/libros-portadas/there-there.jpg" alt="">
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
                  <h6 class="text-center">by Tommy Orange</h6>
                  <h3 class="text-center">$ 12.99</h3>
              </div>
          </div>

          <div class="item">
              <div class="__cover-bestseller">
                  <img class="w-75 mx-auto " src="/img/libros-portadas/very-nice.jpg" alt="">
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
                  <h6 class="text-center">by Mary Watchwosky</h6>
                  <h3 class="text-center">$ 12.99</h3>
              </div>
          </div>

      </div>

  </section>
  <!-- End Bestsellers Section -->

  <!-- New Books Section -->
  <section class="__betsellers">

      <div class="pt-4 pb-4">
          <h2 class="text-center">Special Offer</h2>
      </div>

      <div class="owl-carousel owl-theme">

          <div class="item">
              <div class="__cover-bestseller">
                  <img class="w-75 mx-auto " src="/img/libros-portadas/ballad.jpg" alt="">
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
                      <a href="">The Ballada Of Songbirds and Snakes</a>
                    </h3>
                  <h6 class="text-center">by Suzanne Collins</h6>
                  <h3 class="text-center">$ 27.99</h3>
              </div>
          </div>

          <div class="item">
              <div class="__cover-bestseller">
                  <img class="w-75 mx-auto " src="/img/libros-portadas/hp-cursed-child.jpg" alt="">
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
                      <a href="">Harry Potter</a>
                    </h3>
                  <h6 class="text-center">by J.K. Rowlings</h6>
                  <h3 style="text-decoration: line-through;" class="text-center">$ 12.99</h3>
                  <h3 style="font-size: 1.2em;" class="text-center">$ 12.99</h3>
              </div>
          </div>

          <div class="item">
              <div class="__cover-bestseller">
                  <img class="w-75 mx-auto " src="/img/libros-portadas/a.webp" alt="">
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
                     <a href="">The Happy Lemon</a>
                    </h3>
                  <h6 class="text-center">by Tommy Orange</h6>
                  <h3 class="text-center">$ 12.99</h3>
              </div>
          </div>

          <div class="item">
              <div class="__cover-bestseller">
                  <img class="w-75 mx-auto " src="/img/libros-portadas/very-nice.jpg" alt="">
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
                  <h6 class="text-center">by Mary Watchwosky</h6>
                  <h3 class="text-center">$ 12.99</h3>
              </div>
          </div>

      </div>

  </section>
  <!-- End Books Section -->

  <!-- Random Cite Section -->
  <section class="__random-cite mt-5 ">
      <div class="h-100">
          <div class="h-100 text-light d-flex justify-content-center align-items-center font">
              <blockquote class=" blockquote text-center col-md-10 col-lg-8">
                  <p class="mb-0 font-weight-bold font-italic">Lorem ipsum dolor sit amet, consectetur adipiscing
                      elit. Integer posuere erat a
                      ante.</p>
                  <footer class="blockquote-footer text-light">Someone famous in <cite title="Source Title">Source
                          Title</cite></footer>
              </blockquote>
          </div>
      </div>
  </section>
  <!-- End Random Cite Section -->


@endsection


@section('scripts')

<script src="/js/owl.carousel.min.js"></script>
<script src="/js/manageOwlCarousel.js"></script>

@endsection
