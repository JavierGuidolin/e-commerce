<?php $__env->startSection('styles'); ?>
  <link rel="stylesheet" href="/css/single-product.css">
  <link rel="stylesheet" href="/css/partials/form-controls.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('titulo'); ?>
   Producto simple
<?php $__env->stopSection(); ?>

<?php $__env->startSection('principal'); ?>

<main>

    <section class=" py-4 __single-product-section">

        <div class="container ">
            <div class="row">

                <!--Image Product-->
                <div class="col-12 col-md-6 offset-lg-1 col-lg-4">
                    <div class="text-center d-md-flex align-items-md-center h-100">
                        <img class="w-100" src=<?php echo e($book->cover); ?> alt="Very Nice">
                    </div>
                </div>
                <!--Image Product-->

                <!--InfoProducto-->
                <div class="col-12 col-md-6 offset-lg-1 col-lg-5">
                    <div class="pt-5 px-4">
                        <p>ISBN: <?php echo e($book->isbn); ?></p>
                        <h1 class="__title-product"><?php echo e($book->title); ?></h2>
                        <h6 class="__author-product">
                            
                                <?php $__empty_1 = true; $__currentLoopData = $book->authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <?php echo e($author->fullName()); ?>, 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                           
                        </h6>
                                <p class="pt-2 __icono-info-producto" data-toggle="rating" data-placement="top" title=<?php echo e($rating); ?>>
                                    <?php for($i = 0 ; $i < $rating ; $i++): ?>
                                    <i class="fas fa-star"></i>
                                    <?php endfor; ?>   
                                </p>

                                <p class="mt-4 __description-product"><?php echo e($book->resume); ?></p>

                                <h2 class="__price-product">$ <?php echo e($book->price); ?></h2>

                                <form class="mt-4" action="" method="">
                                    <label for="cantidad" class="mr-1">Cantidad: </label>
                                    <input type="number" class="__input-qty __form-input" id="cantidad" name="cantidad"
                                        value="1" placeholder="1" max="99" min="1">
                                    <button class="btn __btn __btn-add text-uppercase" type="button"
                                        name="button">Añadir</button>
                                </form>

                                <p class="mt-3">Categoria:
                                    <a href=""><?php echo e($book->categoria->name); ?></a>
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
                    <h4 class="text-white text-center">Acerca del Autor</h4>
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
                                        pariatur! Consequatur quis enim incidunt, placeat ullam fugit explicabo quasi, hic, aut delectus
                                        consequuntur repellat nulla reprehenderit ea quos nemo eos esse animi quam qui asperiores
                                        velit dicta debitis! Modi vel laborum nihil, quaerat ut labore molestiae excepturi
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

                            <?php $__empty_1 = true; $__currentLoopData = $relatedBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedBook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="col-6 col-md-4 text-center">
                                    <img class="w-75" src=<?php echo e($relatedBook->cover); ?> alt="">
                                    <p class="pt-2 text-center ">
                                    <a class="__product-rel-title" href=""><?php echo e($relatedBook->title); ?></a>
                                    </p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p>Este autor aun no tiene libros relacionados</p>
                            <?php endif; ?>

                            
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
                        <p class=""><a href="#description">Descripción</a></p>
                        <p class=""><a href="#details">Detalles</a></p>
                        <p class=""><a href="#reviews">Reviews</a></p>
                        <p class=""><a href="#my-review">Mi Review</a></p>
                    </div>
                </div>
                <!--Side menu-->


                <div class="offset-md-2 col-md-8">

                    <!--Product additional data-->
                    <div id="description">
                        <h6 class="text-uppercase pb-2">descripción</h6>
                        <p><?php echo e($book->resume); ?></p>
                    </div>

                    <div id="details">
                        <h6 class="text-uppercase border-top pt-3 pb-2">detalles</h6>
                        <p class="mb-0"><b>ISBN:</b> <?php echo e($book->isbn); ?></p>
                        <p class="mb-0"><b>Fecha de publicacion:</b> <?php echo e($book->date); ?></p>
                        <p class=""><b>Cantidad de paginas:</b> <?php echo e($book->pages); ?> </p>
                    </div>
                    <!--Product additional data-->

                    
                    <!--My review-->
                  

                        <div id="my-review">
                            
                        </div>
                    
                        <!--<p class="font-weight-bold text-center mt-3">Debe estar loggeado para añadir una review</p>
                        
                        <p class="font-weight-bold text-center mt-3">Solo es posible realizar una review del libro</p>-->
                    
                  
                    
                    <!--My review-->

                </div>
            </div>
        </div>
    </section>

</main>

<!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="/js/app.js"></script>    
<!-- Scripts -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\arias\Desktop\Rama laravel\e-commerce-DH-laravel\resources\views/singleProduct.blade.php ENDPATH**/ ?>