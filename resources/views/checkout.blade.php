@extends('layouts.plantilla')


@section('styles')
  <link rel="stylesheet" href="/css/cart.css">
@endsection
 
@section('titulo')
   Producto simple
@endsection

@section('principal')

        <main class="my-5">

        <div class="container">
            <div class="row">

                <section class="col-12 col-lg-7">

                    <div class="row col-12">
                        <div class="my-2">
                            <h5> <i class="fas fa-map-marker-alt pr-1"></i> Mis direcciones</h5>
                        </div>
                    </div>

                    <div class="d-flex align-items-center border-bottom">

                        <div class="row col-2 p-0 m-0">
                           <div class="mx-auto">
                               <input type="radio" name="address" value="" class="__address-radio">
                           </div>
                        </div>

                        <div class="row col-10 p-0 m-0">
                            <div class="my-2 w-100">
                                <p class="mb-0">Urquiza 4381</p>
                                <p class="mb-0">CP: 5513- Coquimbito, Mendoza</p>
                            </div>

                        </div>

                    </div>

                    <div class="d-flex align-items-center border-bottom">

                        <div class="row col-2 p-0 m-0">
                           <div class="mx-auto">
                               <input type="radio" name="address" value="" class="__address-radio">
                           </div>
                        </div>

                        <div class="row col-10 p-0 m-0">
                            <div class="my-2 w-100">
                                <p class="mb-0">Urquiza 4381</p>
                                <p class="mb-0">CP: 5513- Coquimbito, Mendoza</p>
                            </div>

                        </div>

                    </div>

                    <div class="d-flex align-items-center border-bottom">

                        <div class="row col-2 p-0 m-0">
                           <div class="mx-auto">
                               <input type="radio" name="address" value="" class="__address-radio">
                           </div>
                        </div>

                        <div class="row col-10 p-0 m-0">
                            <div class="my-2 w-100">
                                <p class="mb-0">Urquiza 4381</p>
                                <p class="mb-0">CP: 5513- Coquimbito, Mendoza</p>
                            </div>

                        </div>

                    </div>

                </section>

                <!-- Resume -->
                <section class="col-12  offset-lg-1 col-lg-4">

                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-12">

                            <div class="__cart-resume p-4 mt-4">

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

                            <div class="__coupon px-4 py-2 mt-4 mt-lg-2 h-100 ">
                                
                                <div class="__payment border-bottom my-3 pt-1">
                                    <p class="text-uppercase mb-0 pb-2  font-weight-bold">Medio de Pago</p>
                                </div>

                                <div class="text-center">
                                    <img src="/img/mp.webp" class="w-75 __payment" alt="">
                                </div>

                                <div class="d-flex text-center mt-3">
                                    <div class="w-100">
                                        <img class="w-50" src="/img/visa.webp" alt="">
                                    </div>
                                    <div class="w-100">
                                        <img class="w-50" src="/img/master.webp" alt="">
                                    </div>
                                    <div class="w-100">
                                        <img class="w-50" src="/img/master.webp" alt="">
                                    </div>
                                    <div class="w-100">
                                        <img class="w-50" src="/img/visa.webp" alt="">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Coupon -->

                    </div>

                </section>
                <!-- Resume -->


            </div>
        </div>

    </main>

@endsection