@extends('layouts.plantilla')


@section('styles')
  <link rel="stylesheet" href="/css/cart.css">
  <link rel="stylesheet" href="/css/partials/form-controls.css">
@endsection
 
@section('titulo')
   Carrito
@endsection

@section('principal')

<main>

  <section class="__cart my-5">

      <div class="container">
          <div class="card shopping-cart">

              <div class="card-body">

                  <!-- product -->
                  <div class="row">

                      <div class="col-12 col-md-2">
                          <div class="text-center mb-3">
                              <img class="img-responsive __width-img-cart" src="/img/libros-portadas/the-arsonist.webp" alt="prewiew">
                          </div>
                      </div>

                      <!-- Title and description-->
                      <div class="col-12 col-md-6">
                         <div class="h-100 d-flex flex-column justify-content-center">
                          <h5 class="__product-name"><strong>The Arsonist</strong></h5>
                          <h4 class="__product-description">
                              <small>
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi mollitia ipsam
                                  quae cupiditate necessitatibus animi.
                              </small>
                          </h4>
                         </div>
                      </div>
                      <!-- Title and description-->

                      <!-- Options -->
                      <div class="col-12 col-md-4 row mx-auto d-flex align-items-center flex-md-row">
                          <div class="col-5" style="padding-top: 5px">
                              <h6 class="font-weight-bold __product-price">$25.00 x</h6>
                          </div>

                          <div class="col-4">
                              <div class="quantity">
                                  <input type="number" class="form-control text-center __form-input" step="1"
                                      max="99" min="1" value="1" title="Qty" class="qty">
                              </div>
                          </div>

                          <div class="col-3">
                              <button type="button" class="btn btn-xs __btn">
                                  <i class="fa fa-trash text-white" aria-hidden="true"></i>
                              </button>
                          </div>
                      </div>


                      <!-- Options -->

                  </div>

                  <hr>
                  <!-- Product -->

                   <!-- product -->
                   <div class="row">

                      <div class="col-12 col-md-2">
                          <div class="text-center mb-3">
                              <img class="img-responsive __width-img-cart" src="/img/libros-portadas/the-girl-in-red.webp" alt="prewiew">
                          </div>
                      </div>


                      <!-- Title and description-->
                      <div class="col-12 col-md-6">
                         <div class="h-100 d-flex flex-column justify-content-center">
                          <h5 class="__product-name"><strong>The Arsonist</strong></h5>
                          <h4 class="__product-description">
                              <small>
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi mollitia ipsam
                                  quae cupiditate necessitatibus animi.
                              </small>
                          </h4>
                         </div>
                      </div>
                      <!-- Title and description-->

                      <!-- Options -->


                      <div class="col-12 col-md-4 row mx-auto d-flex align-items-center flex-md-row">
                          <div class="col-5">
                              <h6 class="font-weight-bold __product-price">$25.00 x</h6>
                          </div>

                          <div class="col-4">
                              <div class="quantity">
                                  <input type="number" class="form-control text-center __form-input" step="1"
                                      max="99" min="1" value="1" title="Qty" class="qty">
                              </div>
                          </div>

                          <div class="col-3">
                              <button type="button" class="btn btn-xs __btn">
                                  <i class="fa fa-trash text-white" aria-hidden="true"></i>
                              </button>
                          </div>
                      </div>


                      <!-- Options -->

                  </div>

                  <hr>
                  <!-- Product -->

              </div>

              <!-- Cart Options -->
              <div class="border card-footer">
                  <div class="row">
                      <div class="col-8 offset-md-6 col-md-4 offset-lg-7 col-lg-4">
                          <input type="text" class="form-control __form-input" placeholder="Codigo Cupon">
                      </div>
                      <div class="col-4 col-md-2 col-lg-1 pl-lg-0">
                          <button class="btn __btn" href="">Aplicar</button>
                      </div>
                  </div>
              </div>

              <div class="d-flex justify-content-end align-items-center my-3">
                  <a href="" class="btn text-uppercase font-weight-bold __btn-checkout">Checkout</a>
                  <div class="px-3">
                      Total price: <b>$ 50.00</b>
                  </div>
              </div>

          </div>

          <!-- Cart Options -->

      </div>
      </div>

  </section>

</main>
 
@endsection
