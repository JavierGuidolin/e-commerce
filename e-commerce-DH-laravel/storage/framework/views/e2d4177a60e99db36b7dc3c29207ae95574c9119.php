<?php $__env->startSection('titulo'); ?>
Login
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="/css/auth.css">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="__auth">

    <div class="__image-side-login">

        <h1 class="text-center">Login</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

    </div>

    <div class="__form-side">

        <div class="">
            <a href="/"><img class="w-100 mx-auto" src="/img/bookStoreLogo.svg" alt="BookStore Logo"></a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 offset-lg-2 col-lg-8 py-5">

                    <form method="POST" action="<?php echo e(route('login')); ?>" class="loginForm">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email"
                                    class="form-control __form-input <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                    value="<?php echo e(old('email')); ?>" required autocomplete="email">
                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                <small id="emailHelp" class="mb-3 form-text text-danger">
                                    <?php echo e($message); ?>

                                </small>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="row pt-2">
                            <div class="col">
                                <label for="password">Contraseña</label>
                                <input type="password" id="password" name="password"
                                    class="form-control __form-input <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                    value="<?php echo e(old('password')); ?>" required autocomplete="password">
                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                <small id="passwordHelp" class="mb-3 form-text text-danger">
                                    <?php echo e($message); ?>

                                </small>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-check form-check-inline pt-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="remember">Remember</label>
                        </div>

                        <div class="text-right">
                            <input type="submit" class="btn font-weight-bold text-uppercase __btn" value="login">
                        </div>

                        <?php if(Route::has('password.request')): ?>
                        <a class="btn btn-link font-weight-bold  __forgot-pass pt-2" href="<?php echo e(route('password.request')); ?>">
                            <?php echo e(__('¿Olvidaste tu contraseña?')); ?>

                        </a>
                        <?php endif; ?>
                        <br>
                        <a class="btn btn-link font-weight-bold  __forgot-pass pt-2" href="<?php echo e(route('register')); ?>">
                            <?php echo e(__('Registrarse')); ?>

                        </a>
                    </form>

                </div>
            </div>
        </div>


    </div>


</section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/loginValidations.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla-lr', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\arias\Desktop\e-commerce-DH-laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>