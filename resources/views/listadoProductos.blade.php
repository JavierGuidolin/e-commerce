@extends('plantilla')
 @section('titulo')
   Listado de productos
 @endsection
 @section('principal')


  <!-- Header -->
  <header id="header" class="__background-productos">


    <!-- TextHeader -->

    <section class="__header-productos">
      <div class="container">
        <div class="row">
          <article class="col-12">
            <div class="pl-4">
              <h1 class="text-uppercase text-center">SHOP</h1>
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
            <li class="breadcrumb-item"><a class="text-reset" href="#">Home</a></li>
            <li class="breadcrumb-item"><a class="text-reset" href="#">Libros</a></li>
            <li class="breadcrumb-item active" aria-current="page">All</li>
          </ol>
        </nav>
      </div>
      <!-- EndPath -->

      <!-- Filtro -->
      <div class="row __filtro">

        <div class="col-12 col-md-7">
          <p class="text-center text-md-right mt-md-2 mt-lg-2">Mostrando 1-12 resultados de 40</p><!-- ARREGLAR QUE SALGA LA CANTIDAD DE PRODUCTOS -->
        </div>

        <div class="col-12 col-md-5">
          <form class="form-inline my-2 my-lg-0 ml-auto justify-content-center justify-content-md-right">
            <label class="pr-3" for="filtro">Filtrar por: </label><!-- HACER QUE FUNCIONE -->
            <select name="filtro" id="filtro" class="form-control-sm" id="exampleFormControlSelect1">
              <option value="">Precio</option>
              <option value="">Paginas</option>
              <option>Año</option>
              <option>Mas vendidos</option>
              <option>Menos vendidos</option>
            </select>
          </form>
        </div>

      </div>
      <!-- EndFiltro -->


      <div class="row">
        <div class="offset-1 col-10 offset-md-0 col-md-4 col-lg-3">

          <!-- Categorias -->
          <h2 class="pb-2 __etiquetas-titulo">Categorias</h2>
          @foreach ($categories as $categorie)


          <ul class="list-group pt-1">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <a href="categorias">{{$categorie->name}}</a>
              <span class="badge badge-primary badge-pill">Cantidad por genero</span><!-- ARREGLAR QUE SALGA LA CANTIDAD POR GENERO -->
            </li>
            </ul>
            @endforeach

          <!-- EndCategorias -->

          <!-- Etiquetas -->
          <div class="mt-3 mb-3">
            <h2 class="pb-2 __etiquetas-titulo">Tags</h2>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Humor</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Terror</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Junot Diaz</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Negocios</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Autoayuda</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Julie Martinez</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Ciencia Ficcion</a>
            <a class="m-1 btn btn-sm __boton-etiqueta text-white" href="products.php" role="button">Negocios</a>
          </div>
          <!-- EndEtiquetas -->

        </div>

        <!-- Productos-->
        <div class="product-grid col-md-8 col-lg-9">

          <div class="row">
            <!--    foreach ($libros as $libro): --> @forelse ($books as $book)
            <!-- Producto-->
            <div class="offset-1 col-10  offset-md-0 col-md-6 col-lg-3">
              <div class="__tarjeta-producto shadow rounded">

                <div class="__favorito position-absolute m-2">
                  <a class="text-reset" href=""> <i class="fas fa-heart"> </a></i>
                </div>

                <img class="rounded w-100" src="../img/libros-portadas/sun-book.jpg" alt="The Sun Portada">
                <h2 class="__titulo-producto pt-2"><a class="text-reset" href="productos/{{$book->id}}">{{$book->title}}</a></h2>
                @foreach ($book->autor as $autor)
                  <p>Autor:<span>{{$autor->name}}</span></p>
                @endforeach
                <p>Categoria:<span>{{$book->categoria->name}}</span></p>
                <p class="__precio-producto">Precio: ${{ $book->price}}</p>
                <p class="px-2">{{$book->resume}}</p>
                <p>
                  <button class="rounded-bottom">
                    Add to Cart
                  </button>
                </p>
              </div>
            </div>
          @empty
             <p>No hay productos cargados</p>
            <!-- endforeach;-->
           @endforelse
            <!-- EndProducto-->



          </div>

        </div>
        <!-- EndProductos-->
      </div>

      <!-- Paginacion-->

      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="Paginacion">
              <ul class="pagination justify-content-end">
                {{$books->links()}}

              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- EndPaginacion-->

    </section>

  </main>
@endsection
