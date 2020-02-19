<?php

require_once 'autoload.php';

if (isset($_SESSION['email'])) {
    header("Location: ../index.php");
}

$errors = notErrors();

if ($_POST) {

    $customer = new Customer($_POST['email'], $_POST['password']);
    $errors = $validator->validateLogin($customer);

    $notErrors = implode('', $errors);

    //Si no hay errores en el formato de los datos
    if ($notErrors == '') {

        //Traigo de la bd el usuario completo
        $customerLog = CustomerController::findByEmail($customer->getEmail());

        //Si existe el usuario
        if ($customerLog != null) {

            //Valido la pass
            $customerPass = Authenticator::validatePass($customer->getPassword(), $customerLog->getPassword());

            //Si la pass es correcta
            if ($customerPass) {

                Authenticator::setSession($customerLog);

                if (isset($_POST['remember'])) {
                    Authenticator::setCookies($customerLog);
                }

                header('Location: userAccount.php'); // Si todo esta bien redirijo a perfil

            } else {
                $LoginResult = "Las datos ingresados son incorrectos";
            }

        } else {
            $LoginResult = "Las datos ingresados son incorrectos";
        }

    }

}

?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/7c3c4957c1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">

  <link rel="shortcut icon" type="image/png" href="../img/bs-favicon.png" />
  <title> BookStore | Login</title>

</head>

<body>

  <!-- Header -->
  <header id="header" class="__background-login">

    <?php require_once "../modules/navigationBar.php";?>

    <!-- TextHeader -->
    <section class="__header-login">
      <div class="container">
        <div class="row">
          <article class="col-12">
            <div class="pl-4">
              <h1 class="text-uppercase text-center"> LOGIN</h1>
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
            <li class="breadcrumb-item active" aria-current="page">Iniciar sesión</li>
          </ol>
        </nav>
      </div>
      <!-- EndPath -->

      <?php if (isset($LoginResult) && $LoginResult): ?>
          <div class="alert alert-danger" role="alert">
            <?=$LoginResult?> <a href="register.php" class="alert-link">Quiero registrarme!</a>
          </div>
      <?php $_POST = "";?>
      <?php endif;?>

    </section>



    <div class="container-login">
      <div class="login-container">
        <div class="register">
          <h2>Iniciar sesión</h2>
          <form action="login.php" method="post" enctype="multipart/form-data">

            <input type="email" class="mb-1" name="email" placeholder="Email" class="email" value="<?=persistence($errors, "email")?>">
            <small id="emailHelp" class="mb-3 form-text text-danger"><?=isset($errors['email']) ? $errors['email'] : ""?></small>

            <input type="password" class="mb-1" name="password" placeholder="Contraseña" class="pass">
            <small id="passHelp" class="mb-3 form-text text-danger"><?=isset($errors['password']) ? $errors['password'] : ""?></small>

            <div class="form-check">
              <div class="form-group">
                <input class="form-check-input" name="remember" type="checkbox" value="remember" id="recordarme">
                <label class="form-check-label" for="remember">
                  Recordarme
                </label>
              </div>
            </div>
            <?php if (isset($error) && $error == !0): ?>
              <div class="alert alert-danger" role="alert">
                <?=$error?>

              </div>
            <?php endif;?>

            <a class="d-block text-muted" href="#">Olvide mi contraseña</a>

            <input type="submit" class="mt-3 submit" value="INGRESAR">

          </form>
        </div>
        </div>

      </div>

  </main>
  <!-- EndMain -->

  <!-- Footer -->
  <footer class="justify-content-center">

    <?php require_once "../modules/footer.php";?>

  </footer>
  <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
