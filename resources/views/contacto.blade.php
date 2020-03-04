@extends('plantilla')
 @section('titulo')
   Contacto
 @endsection

@section('principal')
 <!-- Header -->
<header id="header" class="__background-contacto">



  <!-- TextHeader -->
  <section class="__header-contacto">
    <div class="container">
      <div class="row">
        <article class="col-12">
          <div class="pl-4">
            <h1 class="text-uppercase text-center">Contacto</h1>
            <blockquote class="blockquote text-center">
              <p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="text-white-50 blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </article>
      </div>
    </div>
  </section>
  <!-- EndTextHeader -->

</header>
<!-- EndHeader -->

<!-- Main -->
<main>
  <section class="container">
    <!-- Path -->
    <div class="mt-5">
      <nav aria-label="breadcrumb ">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a class="text-reset" href="../index.php">Home</a></li>
          <li class="breadcrumb-item active"><a class="text-reset">Contacto</a></li>
        </ol>
      </nav>
    </div>
  </section>

  <div class="container contact">
    <div class="row">
      <div class="col-md-3 __side ">
        <div class="contact-info">
          <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
          <h2><br>Contactanos<br></h2>

          <h4><br>Apreciamos tu opinion! <br></h4>
        </div>
      </div>
      <div class="col-md-9">
        <div class="contact-form">
          <div class="form-group">
            <label class="control-label col-sm-2" for="fname">Nombre:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="fname" placeholder="Ingresa tu nombre" name="fname">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="lname">Apellido:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="lname" placeholder="Ingresa tu apellido" name="lname">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Ingresa tu Email" name="email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="comment">Mensaje:</label>
            <div class="col-sm-10">
            <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="__botonguardar btn ">Enviar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
 @section('principal')
