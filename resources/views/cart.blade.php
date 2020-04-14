@extends('layouts.plantilla')


@section('styles')
  <link rel="stylesheet" href="/css/cart.css">
  <link rel="stylesheet" href="/css/partials/form-controls.css">
@endsection

@section('titulo')
   Carrito
@endsection

@section('principal')
<main class="my-5">

    <div class="container">
        <div class="row">

            <section class="col-12 col-lg-7">
                <div class="__cart mr-lg-2">

                    <!-- Head Table -->
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <p class="mb-0">Producto</p>
                        </div>
                        <div class="col-md-4 row">
                            <div class="col-5">
                                <p class="mb-0">Precio</p>
                            </div>
                            <div class="col-4">
                                <p class="mb-0">Cantidad</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- Head Table -->

                    <div class="__container">

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
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi
                                            mollitia
                                            ipsam
                                            quae cupiditate necessitatibus animi.
                                        </small>
                                    </h4>
                            </div>
                        </div>
                        <!-- Title and description-->

                        <!-- Options -->
                        <div class="col-12 col-md-4 row mx-auto d-flex align-items-center flex-md-row">
                            <div class="col-4">
                                <h6 class="font-weight-bold __product-price text-center">$25.00 x</h6>
                            </div>

                            <div class="col-5">
                                <div class="quantity">
                                    <input type="number" class="form-control text-center __form-input" step="1" max="99" min="1" value="1">
                                </div>
                            </div>

                            <div class="col-3">
                                <button type="button" class="btn btn-sm __btn">
                                    <i class="fa fa-trash text-white" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Options -->
  <hr>
                    </div>



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
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi
                                            mollitia
                                            ipsam
                                            quae cupiditate necessitatibus animi.
                                        </small>
                                    </h4>
                            </div>
                        </div>
                        <!-- Title and description-->

                        <!-- Options -->

                        <div class="col-12 col-md-4 row mx-auto d-flex align-items-center flex-md-row">
                            <div class="col-4">
                                <h6 class="font-weight-bold __product-price text-center">$25.00 x</h6>
                            </div>

                            <div class="col-5">
                                <div class="quantity">
                                    <input type="number" class="form-control text-center __form-input" step="1" max="99" min="1" value="1" title="Qty" class="qty">
                                </div>
                            </div>

                            <div class="col-3">
                                <button type="button" class="btn btn-sm __btn">
                                    <i class="fa fa-trash text-white" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Options -->

                    </div>

                    <hr>
                    </div>
                    <!-- Product -->

                    <div class="row">
                        <div class="col-12">
                            <div class="pb-1 px-3 font-weight-bold d-flex justify-content-between">
                                <p class="mb-0 mt-1">Subtotal</p>
                                <p class="mb-0 mt-1">$ 80.36</p>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <div class="mt-2 mb-2 text-right">
                                <button class="btn __btn text-uppercase font-weight-bold">Checkout <i class="fas fa-angle-right pl-2"></i> </button>
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>

            </section>

            <!-- Resume -->
            <section class="col-12  offset-lg-1 col-lg-4">

                <div class="row">

                    <div class="col-12 col-md-6 col-lg-12">

                        <div class="__cart-resume p-4">

                            <div class="__resume-title border-bottom">
                                <p class="text-uppercase mb-0 pb-2 font-weight-bold">order summary</p>
                            </div>

                            <div class="__resume-values">
                                <div class="pb-1">
                                    <p class="mb-0 mt-1">Subtotal</p>
                                    <p class="mb-0 mt-1">$ 80.36</p>
                                </div>

                                <div class="pb-1">
                                    <p class="mb-0">Envio</p>
                                    <p class="mb-0">-</p>
                                </div>

                                <div class="pb-3">
                                    <p class="mb-0">Impuestos</p>
                                    <p class="mb-0">-</p>
                                </div>

                                <div class="__resume-total border-top pt-2  font-weight-bold">
                                    <p class="text-uppercase mb-0 pb-2">total</p>
                                    <p class="text-uppercase mb-0 pb-2">$65.00</p>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Coupon -->

                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="__coupon px-4 py-2 mt-2 mt-md-0 mt-lg-2 h-100 ">
                            <div class="__resume-title border-bottom my-3 pt-1">
                                <p class="text-uppercase mb-0 pb-2  font-weight-bold">Cupon de Descuento: </p>
                            </div>

                            <form class="p-1">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control __form-input" id="coupon" placeholder="Cupon">
                                    </div>
                                    <div class="col-12 text-right">
                                        <button class="btn __btn text-uppercase font-weight-bold mt-2">aplicar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    <!-- Coupon -->

                </div>

            </section>
            <!-- Resume -->

        </div>
    </div>

</main>
<script src="/js/cartView.js" charset="utf-8"></script>
@endsection
