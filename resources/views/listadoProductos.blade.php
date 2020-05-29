@extends('layouts.plantilla')

@section('styles')
  <link rel="stylesheet" href="/css/list-products.css">
@endsection

@section('titulo')
   Libros
@endsection

 @section('principal')
 <main>

  <section>

      <div class="container">

        <!-- Filter input -->
        <div class="form-group row mt-3">
            
        </div>
         <!-- Filter input -->

        <div class="row">

              <div class="col-5 col-md-3">
                 <!-- Filter side -->
                  <div class="__filter-side text-light my-3 border-right">

                    <div class="__coming-soon">
                        <img  class="w-100" src="/img/ComingSoon.png" alt="">
                    </div>

                      <div class="pb-4 border-bottom">
                          <h3 class="text-uppercase font-weight-bold pb-3">Favoritos</h3>
                          <p><a>Best Sellers</a></p>
                          <p><a>Nuevos</a></p>
                          <p><a>Proximamente</a></p>
                      </div>

                      <div class="pt-5">
                          <h3 class="text-uppercase font-weight-bold pb-3">Categorias</h3>
                          @foreach (Config::get('categories') as $categorie)
                            <p><a>{{$categorie['name']}}</a></p>
                          @endforeach
                          
                      </div>

                  </div>
                <!-- Filter input -->

              </div>

              <div class="col-7 col-md-9">

                  <div class="my-3">
                      <div class="row libros mx-auto">
                      </div>
                  </div>

                  <!-- Pagination -->
                       <nav class="">
                            {{$books->links()}}
                       </nav>
                  <!-- Pagination -->
              </div>

          </div>


      </div>

  </section>

</main>
<script>
    console.log({!!$libros!!});
    localStorage.setItem('Libros',JSON.stringify({!!$libros!!})); //Guarda el array de libros traido de la base de datos y almacena como JSON en local storage
</script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/shoppingcart.js" charset="utf-8"></script>
@endsection
