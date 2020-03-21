@extends('layouts.plantilla')


@section('styles')
  <link rel="stylesheet" href="/css/single-product.css">
  <link rel="stylesheet" href="/css/partials/form-controls.css">
@endsection
 
@section('titulo')
   Producto simple
@endsection

@section('principal')

<main>

    <section class=" py-4 __single-product-section">

        <div class="container ">
            <div class="row">

                <!--Image Product-->
                <div class="col-12 col-md-6 offset-lg-1 col-lg-4">
                    <div class="text-center d-md-flex align-items-md-center h-100">
                        <img class="w-100" src="/img/libros-portadas/very-nice.webp" alt="Very Nice">
                    </div>
                </div>
                <!--Image Product-->

                <!--InfoProducto-->
                <div class="col-12 col-md-6 offset-lg-1 col-lg-5">
                    <div class="pt-5 px-4"">
                        <p>ISBN: 1250010071</p>
                        <h1 class="__title-product">The arsonist: A Mind on Fire</h2>
                            <h6 class="__author-product">by Chloe Hooper</h5>
                                <p class="pt-2 __icono-info-producto">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>

                                <p class="mt-4 __description-product">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt
                                    mollit anim id est laborum.</p>

                                <h2 class="__price-product">$52.00</h2>

                                <form class="mt-4" action="" method="">
                                    <label for="cantidad" class="mr-1">Cantidad: </label>
                                    <input type="number" class="__input-qty __form-input" id="cantidad" name="cantidad"
                                        value="1" placeholder="1" max="99">
                                    <button class="btn __btn __btn-add text-uppercase" type="button"
                                        name="button">Añadir</button>
                                </form>



                                <p class="mt-3">Categorias: 
                                    <a href="">Adventure</a>, 
                                    <a href="">Kids</a>,
                                    <a href="">Music</a>
                                </p>

                                <p class="mt-3 __icono-share">Share:
                                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                                    <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                                </p>

                    </div>
                </div>
                <!--InfoProducto-->

            </div>
        </div>
    </section>

<!--Author Details-->
<section class="__author-details py-4 d-flex align-items-center">

        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h4 class="text-white text-center">About Author</h4>
                </div>

                <!--Author Info-->
                <div class="col-12 col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 col-md-6 d-flex align-items-center py-3 my-3">
                                <img class="w-100" src="/img/author.webp" alt="">
                            </div>

                            <div class="col-6 col-md-6">
                                <div class="__author-description py-1 my-3">
                                    <h5>Chloe Hooper</h5>
                                    <p>1880</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quidem
                                        pariatur!
                                        Consequatur
                                        quis enim incidunt, placeat ullam fugit explicabo quasi, hic, aut delectus
                                        consequuntur
                                        repellat nulla reprehenderit ea quos nemo eos esse animi quam qui asperiores
                                        velit dicta
                                        debitis! Modi vel laborum nihil, quaerat ut labore molestiae excepturi
                                        voluptate nobis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Author Info-->

                <!--Author Books-->
                <div class="col-12 col-md-6">

                    <div class="container">
                        <div class="row">

                            <div class="col-12 col-md-12">
                                <h5 class="text-white text-center py-4">Mas del author</h5>
                            </div>

                            <div class="col-6 col-md-4 text-center">
                                <img class="w-75" src="/img/libros-portadas/the-arsonist.webp" alt="">
                                <p class="pt-2 text-center ">
                                    <a class="__product-rel-title" href="">The arsonist</a>
                                </p>
                            </div>

                            <div class="col-6 col-md-4 text-center">
                                <img class="w-75" src="/img/libros-portadas/very-nice.webp" alt="">
                                <p class="pt-2 text-center ">
                                    <a class="__product-rel-title" href="">Very Nice</a>
                                </p>
                            </div>

                            <div class="col-6  col-md-4 text-center">
                                <img class="w-75" src="/img/libros-portadas/there-there.webp" alt="">
                                <p class="pt-2 text-center ">
                                    <a class="__product-rel-title" href="">There There</a>
                                </p>
                            </div>
                            <div class="col-6 col-md-4 text-center">
                                <img class="w-75" src="/img/libros-portadas/the-girl-in-red.webp" alt="">
                                <p class="pt-2 text-center ">
                                    <a class="__product-rel-title" href="">The girl in red</a>
                                </p>

                        </div>
                    </div>

                </div>

            </div>
            <!--Author Books-->

        </div>
    </div>

</section>
<!--Author Details-->

    <section class="__review my-4">
        <div class="container">
            <div class="row">

                <!--Side menu-->
                <div class="d-none d-md-block col-md-2">
                    <div class="text-right mt-5">
                        <p class=""><a href="#description">Descripcion</a></p>
                        <p class=""><a href="#details">Detalles</a></p>
                        <p class=""><a href="#reviews">Reviews</a></p>
                        <p class=""><a href="#my-review">Mi Review</a></p>
                    </div>
                </div>
                <!--Side menu-->

                 
                <div class="offset-md-2 col-md-8">

                    <!--Product additional data-->
                    <div id="description">
                        <h6 class="text-uppercase pb-2">descripcion</h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum itaque modi eum non
                            cupiditate eligendi deleniti aperiam voluptatum esse! Corporis excepturi sequi explicabo
                            voluptates nesciunt, quae vitae tempore voluptatibus illum!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum itaque modi eum non
                            cupiditate eligendi deleniti aperiam voluptatum esse! Corporis excepturi sequi explicabo
                            voluptates nesciunt, quae vitae tempore voluptatibus illum!</p>
                    </div>

                    <div id="details">
                        <h6 class="text-uppercase border-top pt-3 pb-2">detalles</h6>
                        <p class="mb-0"><b>ISBN:</b> 1250010071</p>
                        <p class="mb-0"><b>Fecha de publicacion:</b> 1990</p>
                        <p class=""><b>Cantidad de paginas:</b> 605 </p>
                    </div>
                    <!--Product additional data-->

                    <!--Reviews-->
                    <div id="reviews">
                        <h6 class="text-uppercase border-top pt-3 pb-2 ">reviews</h6>

                        <div class="__review-individual">
                            <p><span class="font-weight-bold">Juanito</span> says:</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptas,
                                possimus
                                dignissimos ducimus veniam expedita nam corrupti facere voluptatibus impedit.</p>
                            <p>5 <i class="fas fa-star"></i> </p>
                        </div>

                    </div>
                    <!--Reviews-->

                    <!--My review-->
                    <div id="my-review">
                        <h6 class="text-uppercase border-top pt-3 pb-2">tu review</h6>
                        <form method="POST" action="/productos">

                            <div class="row mt-3">

                                <div class="col">
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

                                <div class="col">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" name="email"
                                        class="form-control __form-input @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <small id="emailHelp" class="mb-3 form-text text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">

                                <div class="col">
                                    <label for="review">Review</label>
                                    <textarea type="text" id="review" name="review"
                                        class="form-control __form-input @error('review') is-invalid @enderror" required
                                        autocomplete="review" autofocus>
                                    {{ old('review') }}
                                </textarea>
                                    @error('review')
                                    <small id="reviewHelp" class="mb-3 form-text text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                            </div>
                            
                            <div class="text-right mt-2">
                                <input type="submit" class="btn text-uppercase __btn __btn-add" value="enviar">
                            </div>
    
                        </form>

                       
                    </div>
                    <!--My review-->
                    
                </div>
            </div>
        </div>
    </section>

</main>

@endsection