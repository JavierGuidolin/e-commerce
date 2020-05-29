<?php $__env->startSection('styles'); ?>
  <link rel="stylesheet" href="/css/home.css">
  <link rel="stylesheet" href="/css/partials/form-controls.css">
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('titulo'); ?>
   Mi perfil
<?php $__env->stopSection(); ?>

<?php $__env->startSection('principal'); ?>

<main>
    <div class="my-lg-5">
        <div class="container">
            <div class="row">

                <!-- Options-->
                <div class="col-lg-4">
                    <div class="list-group pt-5" id="list-tab" role="tablist">

                        <a href="#tab1" class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="perfil"> <i class="far fa-id-badge pr-1"></i> Mi perfil</a>

                        <a href="#tab5" class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="reviews"> <i class="fas fa-info-circle"></i> Actualizar mis datos</a>

                        <a href="#tab2" class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="direcciones"> <i class="fas fa-map-marker-alt pr-1"></i> Mis direcciones
                        </a>
                        <a href="#tab3" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="compras"><i
                                class="far fa-credit-card pr-1"></i> Mis compras</a>

                        <a href="#tab4" class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="reviews"> <i class="fas fa-feather-alt"></i> Mis reviews</a>

                        <a href="#" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="ADMIN SITE"> <i class="fas fa-user-cog pr-1"></i> ADMIN SITE</a>

                    </div>
                </div>
                <!-- Options-->

                <!-- Options Panel -->
                <div class="col-lg-8 pt-5 pb-5">
                    <div class="tab-content" id="faq-tab-content">

                   
                       <?php if(Session::get('userUpdated') == true): ?>
                            <div class="alert alert-success" role="alert">
                                Tu información ha sido actualizada!
                            </div>
                       <?php elseif(!$errors->UpdateInfo->isEmpty()): ?>
                            <div class="alert alert-danger" role="alert">
                                Ha ocurrido un error al actualizar tu información. Reintentalo para conocer mas detalles.
                            </div>
                       <?php endif; ?>

                       <?php if(Session::get('passwordUpdated') == true): ?>
                            <div class="alert alert-success" role="alert">
                                Tu contraseña ha sido actualizada!
                            </div>
                       <?php endif; ?>

                       <?php echo e(old('apellido')); ?>


                        <!-- Panel My account-->
                        <div class="tab-pane active show" id="tab1" role="tabpanel" aria-labelledby="tab1">

                            <div class="__perfil border mb-4 px-4 py-3">

                                <div class="row col-12">

                                    <div class="my-2">
                                        <h5> <i class="far fa-id-badge pr-1"></i> Resumen</h5>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-4 col-lg-2">
                                        <img class="w-100 rounded-circle" src="/img/profile.webp" alt="">
                                    </div>
                                  
                                    <div class="col-8 col-lg-9">

                                        <h2 class=""><?php echo e(Auth::user()->fullName()); ?></h2>

                                        <div class="mt-4">
                                            <p class="font-weight-bold">Miembro desde <?php echo e(Auth::user()->created_at); ?> </p>
                                            <p>Email: <?php echo e(Auth::user()->email); ?></p>
                                            <p>Dni: <?php echo e(Auth::user()->dni); ?></p>
                                            <p>Telefono: -</p>
                                        </div>

                                    </div>

                                    <?php if(session('status')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(session('status')); ?>

                                    </div>
                                    <?php endif; ?>

                                    <div class="__validate-account text-center">
                                        <?php if(session('resent')): ?>
                                        <div class="alert alert-success" role="alert">
                                            <?php echo e(__('Un nuevo email ha sido enviado a tu correo.')); ?>

                                        </div>
                                        <?php endif; ?> <?php echo e(__('Un link para validar tu cuenta ha sido enviado a tu email.')); ?> <?php echo e(__('Si no lo has recibido, puedes')); ?> <a class="__new-link" href="<?php echo e(route('verification.resend')); ?>"><?php echo e(__('pedir uno nuevo')); ?></a>.
                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- Panel My account-->

                        <!-- Panel My addresses -->
                        <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">

                            <div class="__directions border mb-4 px-4 py-3">

                                <div class="row col-12">
                                    <div class="my-2">
                                        <h5> <i class="fas fa-map-marker-alt pr-1"></i> Mis direcciones</h5>
                                    </div>
                                </div>

                                <div class="row col-12 p-0 m-0">
                                    <div class="border-bottom my-2 w-100">
                                        <p class="mb-0">Urquiza 4381</p>
                                        <p class="mb-0">CP: 5513- Coquimbito, Mendoza</p>
                                    </div>
                                    <a class="position-absolute __edit-address" href="">
                                        <i class="fas fa-cog"></i>
                                    </a>
                                </div>

                                <div class="row col-12 p-0 m-0">
                                    <div class="border-bottom my-2 w-100">
                                        <p class="mb-0">Urquiza 4040</p>
                                        <p class="mb-0">CP: 5513 - Tropero Sosa, Mendoza</p>
                                    </div>
                                    <a class="position-absolute __edit-address" href="">
                                        <i class="fas fa-cog"></i>
                                    </a>
                                </div>

                            </div>

                            <div class="__directions border mb-4 px-4 py-3">

                                <div class="row col-12">
                                    <div class="my-2">
                                        <h5> <i class="fas fa-map-marked-alt"></i> Añadir una nueva direccion</h5>
                                    </div>
                                </div>

                                <form>
                                    <div class="form-row">

                                        <div class="form-group col-6">
                                            <label for="country">Pais</label>
                                            <select id="country" class="form-control" disabled>
                                              <option selected>Argentina</option>
                                              <option>...</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-6">
                                          <label for="state">Provincia</label>
                                          <select id="state" class="form-control  __form-input">
                                            <option selected>Buenos Aires</option>
                                            <option>Mendoza</option>
                                          </select>
                                        </div>

                                        <div class="form-group col-6">
                                          <label for="Departamento">Departamento</label>
                                          <select id="inputState" class="form-control __form-input">
                                            <option selected>Mendoza</option>
                                            <option>Guaymallen</option>
                                          </select>
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="Departamento">Localidad</label>
                                            <select id="inputState" class="form-control __form-input">
                                              <option selected>Coquimbito</option>
                                              <option>Ortega</option>
                                            </select>
                                          </div>

                                      </div>

                                    <div class="row">
                                      <div class="col-6">
                                        <label for="street">Calle</label>
                                        <input type="text" class="form-control __form-input" id="street" name="street">
                                      </div>

                                      <div class="col-4">
                                        <label for="number">Numero</label>
                                        <input type="number" class="form-control __form-input" id="number" name="number">
                                      </div>

                                      <div class="col-2">
                                        <label for="number">Piso</label>
                                        <input type="number" class="form-control __form-input" id="number" name="number">
                                      </div>
                                    </div>


                                    
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-right mt-3">
                                                <input type="submit" class="btn font-weight-bold text-uppercase __btn" value=" resGuardar">
                                            </div>
                                        </div>
                                    </div>

                                  </form>
                            </div>

                        </div>
                        <!-- Panel My addresses -->

                        <!-- Panel My purchases -->
                        <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">

                            <div class="__purchases border mb-4 px-4 py-3">

                                <div class="row col-12">
                                    <div class="my-2">
                                        <h5> <i class="far fa-credit-card pr-1"></i> Mis Compras</h5>
                                    </div>
                                </div>

                                <div class="row col-12 p-0 m-0">

                                    <div class="border-bottom w-100 my-2">
                                        <p class="mb-0">Realizada el: 10/03/2009 </p>
                                        <p class="mb-0">Total: $149.99</p>
                                    </div>

                                    <a class="position-absolute __edit-address" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>

                                <div class="row col-12 p-0 m-0">

                                    <div class="border-bottom w-100 my-2">
                                        <p class="mb-0">Realizada el: 10/03/2020 </p>
                                        <p class="mb-0">Total: $14</p>
                                    </div>

                                    <a class="position-absolute __edit-address" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>

                            </div>

                        </div>
                        <!-- Panel My purchases -->

                        <!-- Panel My reviews -->
                        <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">

                            <div class="__reviews border mb-4 px-4 py-3">

                                <div class="row col-12">
                                    <div class="my-2">
                                        <h5>
                                            <i class="fas fa-feather-alt"></i> Mis Reviews
                                        </h5>
                                    </div>
                                </div>

                                <div class="row col-12 p-0 m-0">

                                    <div class="border-bottom w-100 my-2">
                                        <p class="mb-0 font-weight-bold">El libro magico de blancanieves</p>
                                        <p class="mb-0 __review-cal">5 <i class="fas fa-star"></i></p>
                                        <p class="mb-0 __review-desc pb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, delectus...</p>
                                    </div>

                                    <a class="position-absolute __edit-address" href="">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>

                            </div>

                        </div>
                        <!-- Panel My reviews -->

                        <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab4">

                            <div class="__my-info border mb-4 px-4 py-3">

                                <div class="row col-12">
                                    <div class="my-2">
                                        <h5>
                                            <i class="fas fa-info-circle"></i> Mis datos
                                        </h5>
                                    </div>
                                </div>

                                <form method="POST" action='/user/updateinfo'>

                                    <?php echo csrf_field(); ?>

                                    <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" name="id">

                                    <div class="row">

                                        <div class="col py-2">
                                            <label for="name">Nombre</label>
                                            <input type="text" id="name" name="name" class="form-control __form-input <?php if ($errors->has('nombre')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('name') != null ?  old('name') : Auth::user()->name); ?>" required autocomplete="name" autofocus> 
                                            <?php if($errors->UpdateInfo->has('name')): ?>
                                                <small id="nameHelp" class="mb-3 form-text text-danger">
                                                    <?php echo e($errors->UpdateInfo->first('name')); ?>

                                                </small> 
                                            <?php endif; ?>
                                        </div>

                                        <div class="col py-2">
                                            <label for="surname">Apellido</label>
                                            <input type="text" id="surname" name="surname" class="form-control __form-input <?php if ($errors->has('apellido')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('apellido'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('surname') != null ?  old('surname') : Auth::user()->surname); ?>" required autocomplete="surname" autofocus> 
                                            <?php if($errors->UpdateInfo->has('surname')): ?>
                                                <small id="nameHelp" class="mb-3 form-text text-danger">
                                                    <?php echo e($errors->UpdateInfo->first('surname')); ?>

                                                </small> 
                                            <?php endif; ?>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col py-2">
                                            <label for="email">Email</label>
                                            <input  readonly type="email" id="email" name="email" class="form-control __form-input <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('email') != null ?  old('email') : Auth::user()->email); ?>" required autocomplete="email"> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6 py-2">
                                            <label for="dni">DNI</label>
                                            <input type="dni" id="dni" name="dni" class="form-control __form-input  <?php if ($errors->has('dni')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dni'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" autocomplete="dni" value="<?php echo e(old('dni') != null ?  old('dni') : Auth::user()->dni); ?>">
                                            <?php if($errors->UpdateInfo->has('dni')): ?>
                                                <small id="nameHelp" class="mb-3 form-text text-danger">
                                                    <?php echo e($errors->UpdateInfo->first('dni')); ?>

                                                </small> 
                                            <?php endif; ?>
                                        </div>

                                    </div>


                                    <div class="text-right">
                                        <input type="submit" class="btn font-weight-bold text-uppercase __btn" value="actualizar">
                                    </div>
                                </form>

                            </div>

                            <div class="__my-pass border mb-4 px-4 py-3">

                                <div class="row col-12">
                                    <div class="my-2">
                                        <h5>
                                            <i class="fas fa-key"></i> Password
                                        </h5>
                                    </div>
                                </div>

                                <div class="">
                                    <form method="POST" action="/user/updatepass">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">

                                            <div class="col py-2">
                                                <label for="password">Contraseña</label>
                                                <input type="password" id="password" name="password"
                                                    class="form-control __form-input  <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" required
                                                    autocomplete="new-password">
                                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                                <small id="emailHelp" class="mb-3 form-text text-danger">
                                                    <?php echo e($message); ?>

                                                </small>
                                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                            </div>

                                            <div class="col py-2">
                                                <label for="rePassword">Confirmar</label>
                                                <input type="password" id="rePassword" class="form-control __form-input"
                                                    name="password_confirmation" required autocomplete="new-password">
                                                <small id="rePasswordHelp" class="mb-3 form-text text-danger"></small>
                                            </div>

                                            
                                        </div>

                                        <div class="text-right">
                                            <input type="submit" class="btn font-weight-bold text-uppercase __btn" value="actualizar">
                                        </div>

                                        
                                    </form>
                                </div>

                        </div>

                    </div>
                </div>
            </div>

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\arias\Desktop\e-commerce-DH-laravel\resources\views/home.blade.php ENDPATH**/ ?>