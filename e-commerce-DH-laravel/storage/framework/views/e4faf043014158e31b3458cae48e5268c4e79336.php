<?php $__env->startSection('styles'); ?>
  <link rel="stylesheet" href="/css/list-products.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('titulo'); ?>
   Libros
<?php $__env->stopSection(); ?>

 <?php $__env->startSection('principal'); ?>
 <main>

  <section>

      <div class="container">

        <!-- Filter input -->
        <div class="form-group row mt-3">

            <label for="inputPassword3" class="col-4 offset-md-7 col-md-2 col-form-label">Filtrar por:</label>
            <div class="col-8 col-md-3">
                <select id="inputState" class="form-control __filter-input">
                <option selected>A - Z</option>
                <option>Precio</option>
                <option>News</option>
                <option>???</option>
                <option>???</option>
                </select>
            </div>

        </div>
         <!-- Filter input -->

        <div class="row">

              <div class="col-5 col-md-3">

                 <!-- Filter side -->
                  <div class="__filter-side my-3 border-right">

                      <div class="pb-4 border-bottom">
                          <h3 class="text-uppercase font-weight-bold pb-3">Favoritos</h3>
                          <p><a href="">Best Sellers</a></p>
                          <p><a href="">Nuevos</a></p>
                          <p><a href="">Proximamente</a></p>
                      </div>

                      <div class="pt-5">
                          <h3 class="text-uppercase font-weight-bold pb-3">Categorias</h3>
                          <p><a href="">Arte & Fotografia</a></p>
                          <p><a href="">Biografias</a></p>
                          <p><a href="">Negocios</a></p>
                          <p><a href="">Cocina</a></p>
                          <p><a href="">Humor</a></p>
                          <p><a href="">Historia</a></p>
                          <p><a href="">Religion</a></p>
                          <p><a href="">Sci-Fi & Fantasia</a></p>
                          <p><a href="">Auto-Ayuda</a></p>
                          <p><a href="">Misterio & Crimen</a></p>
                          <p><a href=""> Deportes</a></p>
                      </div>

                  </div>
                <!-- Filter input -->

              </div>

              <div class="col-7 col-md-9">

                  <div class="my-3">
                      <div class="row libros">
                      </div>
                  </div>

                  <!-- Pagination -->
                       <nav class="">
                            <?php echo e($books->links()); ?>

                       </nav>
                  <!-- Pagination -->
              </div>

          </div>


      </div>

  </section>

</main>
<script>
    console.log(<?php echo $libros; ?>);
    localStorage.setItem('Libros',JSON.stringify(<?php echo $libros; ?>)); //Guarda el array de libros traido de la base de datos y almacena como JSON en local storage
</script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/shoppingcart.js" charset="utf-8"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\arias\Desktop\e-commerce-DH-laravel\resources\views/listadoProductos.blade.php ENDPATH**/ ?>