@extends('layouts.plantilla-lr')

@section('titulo')
Login
@endsection

@section('styles')
    <link rel="stylesheet" href="/css/auth.css">
@endsection


@section('content')

<section class="__auth">

    <div class="__image-side-login">

        <h1 class="text-center">Login</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

    </div>

    <div class="__form-side">

        <div class="">
            <a href="/"><img class="w-100 mx-auto" src="/img/bookStoreLogo.svg" alt="BookStore Logo"></a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 offset-lg-2 col-lg-8 py-5">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col">
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

                        <div class="row pt-2">
                            <div class="col">
                                <label for="password">Contraseña</label>
                                <input type="password" id="password" name="password"
                                    class="form-control __form-input @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" required autocomplete="password">
                                @error('password')
                                <small id="passwordHelp" class="mb-3 form-text text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-check form-check-inline pt-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember</label>
                        </div>

                        <div class="text-right">
                            <input type="submit" class="btn font-weight-bold text-uppercase __btn" value="login">
                        </div>

                        @if (Route::has('password.request'))
                        <a class="btn btn-link font-weight-bold  __forgot-pass pt-2" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                        @endif

                    </form>
                   
                </div>
            </div>
        </div>


    </div>


</section>

@endsection
