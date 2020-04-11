@extends('layouts.plantilla-lr')

@section('titulo')
Register
@endsection

@section('styles')
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Merriweather:700,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/auth.css">
@endsection


@section('content')

<section class="__auth">

    <div class="__image-side-register">

        <h1 class="text-center">Register</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

    </div>

    <div class="__form-side">

        <div class="">
            <a href="/"><img class="w-100 mx-auto" src="/img/bookStoreLogo.svg" alt="BookStore Logo"></a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 offset-lg-2 col-lg-8 py-5">

                    <form method="POST" action="{{ route('register') }}" class="regForm">

                        @csrf

                        <div class="row">

                            <div class="col py-2">
                                <label for="name">Nombre</label>
                                <input type="text" id="name" name="name"
                                    class="form-control __form-input @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <small id="nameHelp" class="mb-3 form-text text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>

                            <div class="col py-2">
                                <label for="surname">Apellido</label>
                                <input type="text" id="surname" name="surname"
                                    class="form-control __form-input @error('surname') is-invalid @enderror"
                                    value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                                @error('surname')
                                <small id="surnameHelp" class="mb-3 form-text text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>

                        </div>

                        <div class="row">
                            <div class="col py-2">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email"
                                    class="form-control __form-input @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <small id="emailHelp" class="mb-3 form-text text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col py-2">
                                <label for="password">Contraseña</label>
                                <input type="password" id="password" name="password"
                                    class="form-control __form-input  @error('password') is-invalid @enderror" required
                                    autocomplete="new-password">
                                @error('password')
                                <small id="emailHelp" class="mb-3 form-text text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="col py-2">
                                <label for="rePassword">Confirmar</label>
                                <input type="password" id="rePassword" class="form-control __form-input"
                                    name="password_confirmation" required autocomplete="new-password">
                                <small id="rePasswordHelp" class="mb-3 form-text text-danger"></small>
                            </div>
                        </div>

                        <div class="text-right">
                            <input type="submit" class="btn font-weight-bold text-uppercase __btn" value="registrarse">
                        </div>
                        <a class="btn btn-link font-weight-bold  __forgot-pass pt-2" href="{{ route('login') }}">
                            {{ __('Ya tengo una cuenta') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>


    </div>


</section>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="js/registerValidation.js" charset="utf-8"></script>
@endsection
