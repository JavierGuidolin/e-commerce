@extends('plantilla')
 @section('titulo')
   Generos
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
               <h1 class="text-uppercase text-center">CATEGORIAS</h1>
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
   <main>

     <section class="container">

       <!-- Path -->
       <div class="mt-5">
         <nav aria-label="breadcrumb ">
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a class="text-reset" href="#">Home</a></li>
             <li class="breadcrumb-item"><a class="text-reset" href="/productos">Libros</a></li>
             <li class="breadcrumb-item"><a class="text-reset" href="categorias">Categorias</a></li>
             <li class="breadcrumb-item active" aria-current="page">All</li>
           </ol>
         </nav>
       </div>
       @forelse ($categories as $category)
         <li>{{$category->name}}

           <ul>
             @foreach ($category->books as $book)
               <li>
                 <a href="/productos/{{$book->id}}">{{$book->title}}</a>
               </li>
             @endforeach
           </ul>

          </li> <br>

         @empty
            <p>No hay generos</p>

       @endforelse


         {{$categories->links()}}
   </section>

   </main>








@endsection
