<?php

require_once 'autoload.php';

if (isset($_SESSION['email'])) {
    header("Location: ../index.php");
}

$errors = notErrors();

if ($_POST) {

    //Nuevo cliente
    $customer = new Customer($_POST['email'],
        $_POST['password'],
        $_POST['rePassword'],
        $_POST['name'],
        $_POST['surname'],
    );

    //Valido errores
    $errors = $validator->validateRegister($customer, 0); // El segundo parametro le indica que debe validar el email
    $notErrors = implode('', $errors);

    //Si no hay errores almaceno usuario en la BD
    if ($notErrors == '') {
        $insertValue = CustomerController::saveCustomer($customer);
        $_POST = "";
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
  <title> BookStore |  Register</title>

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
              <h1 class="text-uppercase text-center">REGISTRO</h1>
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
            <li class="breadcrumb-item active" aria-current="page">Registro</li>
          </ol>
        </nav>
      </div>
      <!-- EndPath -->

      <!-- Insert Result -->
        <?php if (isset($insertValue) && $insertValue): ?>
          <div class="alert alert-success" role="alert">
            Te has registrado correctamente. <a href="login.php" class="alert-link">Ya puedes loguearte</a>
          </div>
        <?php endif;?>
      <!-- End Insert Result -->

    </section>

    <div class="container-login">
      <div class="login-container">
        <div class="register">
          <h2>Registrarse</h2>

          <form action="register.php" method="post">

            <div class="row">

              <div class="col">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Nombre" value="<?=persistence($errors, "name")?>">
                <small id="nameHelp" class="mb-3 form-text text-danger"><?=isset($errors['name']) ? $errors['name'] : ""?></small>
              </div>

              <div class="col">
                <label for="surname">Apellido</label>
                <input type="text" id="surname" class="form-control" name="surname" placeholder="Surname" value="<?=persistence($errors, "surname")?>">
                <small id="surnameHelp" class="mb-3 form-text text-danger"><?=isset($errors['surname']) ? $errors['surname'] : ""?></small>
              </div>

            </div>

            <div class="row">
                <div class="col">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?=persistence($errors, "email")?>">
                  <small id="emailHelp" class="mb-3 form-text text-danger"><?=isset($errors['email']) ? $errors['email'] : ""?></small>
                </div>
            </div>

              <div class="row">
                <div class="col">
                  <label for="password">Contraseña</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña">
                  <small id="passHelp" class="mb-3 form-text text-danger"><?=isset($errors['password']) ? $errors['password'] : ""?></small>
                </div>
                <div class="col">
                  <label for="rePassword">Confirmar Contraseña</label>
                  <input type="password" id="rePassword" class="form-control" name="rePassword" placeholder="Repetir contraseña">
                  <small id="rePasswordHelp" class="mb-3 form-text text-danger"><?=isset($errors['rePassword']) ? $errors['rePassword'] : ""?></small>
                </div>
              </div>

            <input type="submit" class="mt-3 submit" value="REGISTRARSE">
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
