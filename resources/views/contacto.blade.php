@extends('layouts.plantilla')

@section('styles')
  <link rel="stylesheet" href="/css/contact.css">
  <link rel="stylesheet" href="/css/partials/form-controls.css">
@endsection

@section('titulo')
   Contacto
@endsection

@section('principal')

<main>
  <section class="my-5">

      <div class="container">
          <div class="row">

              <div class="col-sm-12 col-md-6">

                <!-- Side info -->
                <div>

                    <div class="pl-3 mb-4">

                          <h1>Contacto</h1>
                            <p>
                              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus ipsum impedit
                              laboriosam tempore, quos laudantium.
                            </p>

                            <p>
                                Voluptatibus maxime voluptatum quae id veniam? Lorem ipsum dolor sit amet consectetur adipisicing.
                            </p>

                            <p class="mb-1">11/234 Main Street Disneyland</p>
                            <p class="mb-1">Email: info@example.com</p>
                            <p class="mb-1">Phone: + 01 234 567 88</p>
                            <p class="mb-0">Phone: + 01 234 567 89</p>
                    </div>


                    <form action="/contacto/send" method="POST" class="contactForm">

                        @csrf

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="fname">Nombre:</label>
                            <div class="col-sm-10">
                                <input 
                                    type="text" 
                                    class="form-control __form-input @error('fname') is-invalid @enderror"
                                    id="fname"
                                    name="fname"
                                    value="{{old('fname')}}"
                                    required
                                >

                                @error('fname')
                                    <small id="nameHelp" class="mb-3 form-text text-danger">
                                        {{ $message }}
                                    </small>
                                 @enderror

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="lname">Apellido:</label>
                            <div class="col-sm-10">
                                <input 
                                    type="text"
                                    class="form-control __form-input @error('lname') is-invalid @enderror"
                                    id="lname"
                                    name="lname"
                                    required
                                    value="{{old('lname')}}"
                                >
                                
                                @error('lname')
                                    <small id="surnameHelp" class="mb-3 form-text text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input 
                                    type="email" 
                                    class="form-control __form-input @error('email') is-invalid @enderror" 
                                    id="email" 
                                    name="email"
                                    required
                                    value="{{old('email')}}"
                                    
                                >

                                @error('email')
                                    <small id="emailHelp" class="mb-3 form-text text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="comment">Mensaje:</label>
                            <div class="col-sm-10">
                                <textarea 
                                    class="form-control __form-input  @error('message') is-invalid @enderror" 
                                    rows="5" id="comment" 
                                    name="message"
                                    required>{{old('message')}}</textarea>
                               
                                @error('message')
                                    <small id="nameHelp" class="mb-3 form-text text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10 text-right">
                                <button type="submit" class="__btn font-weight-bold btn text-uppercase">Enviar</button>
                            </div>
                        </div>

                        @if (Session::has('email'))
                            @if (Session::get('email'))
                                <div class="alert alert-success" role="alert">
                                    El email ha sido enviado!
                                </div>
                            @else
                                <div class="alert alert-danger" role="alert">
                                    Ha ocurrido un error al enviar el email. Por favor reintentalo mas tarde.
                                </div>
                            @endif
                        @endif

                    </form>

                  </div>
                  <!-- Side info -->

              </div>

              <!-- Map info -->
              <div class="col-sm-12 col-md-6">
                  <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2787.5327787698243!2d-117.94177155473878!3d33.813504951452494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd7d12b3b5e6b%3A0x2ef62f8418225cfa!2sDisneyland!5e0!3m2!1ses-419!2sar!4v1584415614241!5m2!1ses-419!2sar"
                      frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" title="nuestra localizacion">
                  </iframe>
              </div>
              <!-- Map info -->

          </div>
      </div>

  </section>
</main>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/contactValidation.js" charset="utf-8"></script>

@endsection
