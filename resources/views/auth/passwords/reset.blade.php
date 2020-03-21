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

        <div class="__image-side-reset">

            <h1 class="text-center">Lorem</h1>
            <p class="text-center">Lorem ipsum dolor sit amet.</p>

        </div>

        <div class="__form-side">

            <div class="">
                <a href=""><img class="w-100 mx-auto" src="bookStoreLogo.svg" alt=""></a>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 offset-md-2 col-md-8  py-5">

                        <h5>Cambiar contraseña</h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum officiis sunt, magni nemo
                            expedita voluptas!</p>

                        <form method="POST" action="{{ route('password.update') }}">
                            
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row">

                                <div class="col">
                                    <label for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <small id="nameHelp" class="mb-3 form-text text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">

                                <div class="col">
                                    <label for="password">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                    <small id="nameHelp" class="mb-3 form-text text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="password-confirm">Confirmar</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="text-right mt-2">
                                <input type="submit" class="btn text-uppercase __btn" value="Cambiar Contraseña">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>


        </div>


    </section>


</main>

@endsection
