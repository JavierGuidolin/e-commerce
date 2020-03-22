@extends('layouts.plantilla')

@section('styles')
  <link rel="stylesheet" href="/css/home.css">
@endsection
 
@section('titulo')
   Mi perfil
@endsection

@section('principal')

<main>
    <div class="my-lg-5">
        <div class="container">
            <div class="row">
    
                <!-- Options-->
                <div class="col-lg-4">
                    <div class="list-group pt-5" id="list-tab" role="tablist">
    
                        <a href="#tab1" class="list-group-item list-group-item-action active" id="list-home-list"
                            data-toggle="list" href="#list-home" role="tab" aria-controls="perfil"> <i
                                class="far fa-id-badge pr-1"></i> Mi perfil</a>
    
                        <a href="#tab2" class="list-group-item list-group-item-action" id="list-profile-list"
                            data-toggle="list" href="#list-profile" role="tab" aria-controls="direcciones"> <i
                                class="fas fa-map-marker-alt pr-1"></i> Mis
                            direcciones</a>
                        <a href="#tab3" class="list-group-item list-group-item-action" id="list-settings-list"
                            data-toggle="list" href="#list-settings" role="tab" aria-controls="compras"><i
                                class="far fa-credit-card pr-1"></i> Mis compras</a>
    
                        <a href="#tab4" class="list-group-item list-group-item-action" id="list-messages-list"
                            data-toggle="list" href="#list-messages" role="tab" aria-controls="reviews"> <i
                                class="fas fa-feather-alt"></i> Mis reviews</a>
    
                        <a href="#" class="list-group-item list-group-item-action" id="list-settings-list"
                            data-toggle="list" href="#list-settings" role="tab" aria-controls="ADMIN SITE"> <i
                                class="fas fa-user-cog pr-1"></i> ADMIN SITE</a>
    
                    </div>
                </div>
                <!-- Options-->
    
    
                <!-- Options Panel -->
                <div class="col-lg-8 pt-5 pb-5">
                    <div class="tab-content" id="faq-tab-content">
    
                        <!-- Panel My account-->
                        <div class="tab-pane active show" id="tab1" role="tabpanel" aria-labelledby="tab1">
    
                            <div class="__perfil border mb-4 px-4 py-3">
    
                                <div class="row col-12">
    
                                    <div class="my-2">
                                        <h5> <i class="far fa-id-badge pr-1"></i> Resumen</h5>
                                    </div>
    
    
                                    <a href="" class="position-absolute __edit-profile border"><i
                                            class="fas fa-cog"></i></a>
    
                                </div>
    
                                <div class="row">
    
                                    <div class="col-4 col-lg-2">
                                        <img class="w-100 rounded-circle" src="/img/profile.webp" alt="">
                                    </div>
    
                                    <div class="col-8 col-lg-9">
    
                                        <h2 class="">Mary Berryton</h2>
    
                                        <div class="mt-4">
                                            <p class="font-weight-bold">Member since February 2019</p>
                                            <p>maryberry@gmail.com</p>
                                            <p>DNI: -</p>
                                            <p>Telefono: -</p>
                                        </div>
    
                                    </div>
    
    
    
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
    
                                    <div class="__validate-account text-center">
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('Un nuevo email ha sido enviado a tu correo.') }}
                                            </div>
                                        @endif
                    
                                        {{ __('Un link para validar tu cuenta ha sido enviado a tu email.') }}
                                        {{ __('Si no lo has recibido, puedes') }} <a class="__new-link" href="{{ route('verification.resend') }}">{{ __('pedir uno nuevo') }}</a>.
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
                        <!-- Panel My account-->
    
                        <!-- Panel My addresses -->
                        <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
    
    
                            <div class="__directions border mb-4 px-4 py-3">
    
                                <div class="row col-12">
                                    <div class="my-2">
                                        <h5> <i class="fas fa-map-marker-alt pr-1"></i> Mis direcciones</h5>
                                    </div>
                                </div>
    
                                <div class="row col-12 p-0 m-0">
                                    <div class="border-bottom my-2 w-100">
                                        <p class="mb-0">Urquiza 4381</p>
                                        <p class="mb-0">CP: 5513- Coquimbito, Mendoza</p>
                                    </div>
                                    <a class="position-absolute __edit-address" href="">
                                        <i class="fas fa-cog"></i>
                                    </a>
                                </div>
    
                                <div class="row col-12 p-0 m-0">
                                    <div class="border-bottom my-2 w-100">
                                        <p class="mb-0">Urquiza 4040</p>
                                        <p class="mb-0">CP: 5513 - Tropero Sosa, Mendoza</p>
                                    </div>
                                    <a class="position-absolute __edit-address" href="">
                                        <i class="fas fa-cog"></i>
                                    </a>
                                </div>
    
                                <a href="" class="position-absolute __edit-profile">Add</a>
    
                            </div>
    
    
                        </div>
                        <!-- Panel My addresses -->
    
    
                       <!-- Panel My purchases -->
                        <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
    
    
                            <div class="__purchases border mb-4 px-4 py-3">
    
                                <div class="row col-12">
                                    <div class="my-2">
                                        <h5> <i class="far fa-credit-card pr-1"></i> Mis Compras</h5>
                                    </div>
                                </div>
    
    
                                <div class="row col-12 p-0 m-0">
    
                                    <div class="border-bottom w-100 my-2">
                                        <p class="mb-0">Realizada el: 10/03/2009 </p>
                                        <p class="mb-0">Total: $149.99</p>
                                    </div>
    
                                    <a class="position-absolute __edit-address" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
    
                                <div class="row col-12 p-0 m-0">
    
                                    <div class="border-bottom w-100 my-2">
                                        <p class="mb-0">Realizada el: 10/03/2020 </p>
                                        <p class="mb-0">Total: $14</p>
                                    </div>
    
                                    <a class="position-absolute __edit-address" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
    
                            </div>
    
                        </div>
                        <!-- Panel My purchases -->
    
                        <!-- Panel My reviews -->
                        <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
    
    
                            <div class="__reviews border mb-4 px-4 py-3">
    
                                <div class="row col-12">
                                    <div class="my-2">
                                        <h5>
                                            <i class="fas fa-feather-alt"></i> Mis Reviews
                                        </h5>
                                    </div>
                                </div>
    
    
                                <div class="row col-12 p-0 m-0">
    
                                    <div class="border-bottom w-100 my-2">
                                        <p class="mb-0 font-weight-bold">El libro magico de blancanieves</p>
                                        <p class="mb-0 __review-cal">5 <i class="fas fa-star"></i></p>
                                        <p class="mb-0 __review-desc pb-2">Lorem ipsum dolor, sit amet consectetur
                                            adipisicing elit. Praesentium, delectus...</p>
                                    </div>
    
                                    <a class="position-absolute __edit-address" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
    
    
                            </div>
    
                        </div>
                        <!-- Panel My reviews -->
    
    
                    </div>
    
                </div>
    
    
            </div>
        </div>
    </div>
    
</main>
@endsection
