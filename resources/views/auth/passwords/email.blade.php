@extends('layouts.plantilla-lr')

@section('titulo')
Olvide mi contraseña
@endsection

@section('styles')
    <link rel="stylesheet" href="/css/auth.css">
@endsection


@section('content')
<main>
    
    <section class="__auth">

        <div class="__image-side-forgot-pass">

            <h1 class="text-center">Lorem</h1>
            <p class="text-center">Lorem ipsum dolor sit amet.</p>

        </div>

        <div class="__form-side">

            <div class="">
                <a href="/"><img class="w-100 mx-auto" src="/img/bookStoreLogo.svg" alt="BookStore Logo"></a>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 offset-md-2 col-md-8  py-5">

                        <h5>¿Olvidaste tu contraseña?</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum officiis sunt, magni nemo
                            expedita voluptas!</p>

                        <form method="POST" action="{{ route('password.email') }}">

                            @csrf

                            <div class="row">

                                <div class="col">
                                    <label for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control __form-input @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <small id="nameHelp" class="mb-3 form-text text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>

                            <div class="text-right mt-2">
                                <input type="submit" class="btn font-weight-bold text-uppercase __btn" value="Enviar Link">
                            </div>

                            @if (session('status'))
                                <div class="alert alert-success mt-2" role="alert">
                                    {{ session('status') }}
                                </div>
                             @endif


                        </form>
                    </div>
                </div>
            </div>


        </div>


    </section>


</main>
@endsection
