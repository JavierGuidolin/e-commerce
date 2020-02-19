<?php
require_once 'autoload.php';

if (!$_SESSION['email']) {
    header('Location: register.php');
}

$errors = notErrors();
$customerReg = CustomerController::findByEmail($_SESSION['email']); // Recupeo de la BD los detalles del usuario

if ($_POST) {

    //Nuevo Customer
    $customer = new Customer($_POST['email'],
        $_POST['password'],
        $_POST['rePassword'],
        $_POST['name'],
        $_POST['surname'],
        2,
        $customerReg->getId());

    //Valido errores
    $errors = $validator->validateRegister($customer, 1); //Le envio un segundo parametro para reutilizar la validacion de registro, Si es 1 no valida el mail
    $notErrors = implode('', $errors);

    //Si no hay errores almaceno usuario en la BD
    if ($notErrors == '') {

        $insertValue = CustomerController::updateCustomer($customer);

        Authenticator::setCookies($customer); //Actualizo los datos de session y cookies
        Authenticator::setSession($customer);

        $_POST = "";
        header('Location: updateProfile.php?status=1');
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
  <title> BookStore | Login or Register</title>

</head>

<body>

  <!-- Header -->
  <header id="header" class="__background-perfil">

    <?php require_once "../modules/navigationBar.php";?>

    <!-- TextHeader -->
    <section class="__header-perfil">
      <div class="container">
        <div class="row">
          <article class="col-12">
            <div class="pl-4">
              <h1 class="text-uppercase text-center">Mi Perfil</h1>
              <blockquote class="blockquote text-center">
                <p class="mb-0 text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="text-dark- blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
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
            <li class="breadcrumb-item active" aria-current="page">Perfil</li>
          </ol>
        </nav>
      </div>
      <!-- EndPath -->

      <!-- Insert Result -->
      <?php if (isset($_GET['status']) && $_GET['status'] == 1): ?>
          <div class="alert alert-success" role="alert">
            Perfil Actualizado  <a href="../index.php" class="alert-link">Volver a Inicio</a>
          </div>
        <?php endif;?>
      <!-- End Insert Result -->


    <section id="profile">

      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container mb-4">

    <div class="container-login">
      <div class="login-container">
        <div class="register">
          <h2>Actualizar Perfil</h2>

          <form action="updateProfile.php" method="post">

            <div class="row">

              <div class="col">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Nombre" value="<?=$customerReg->getName()?>">
                <small id="nameHelp" class="mb-3 form-text text-danger"><?=isset($errors['name']) ? $errors['name'] : ""?></small>
              </div>

              <div class="col">
                <label for="surname">Apellido</label>
                <input type="text" id="surname" class="form-control" name="surname" placeholder="Surname" value="<?=$customerReg->getSurname()?>">
                <small id="surnameHelp" class="mb-3 form-text text-danger"><?=isset($errors['surname']) ? $errors['surname'] : ""?></small>
              </div>

            </div>

            <div class="row">
                <div class="col">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="<?=$customerReg->getEmail()?>" readonly>
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

            <input type="submit" class="mt-3 submit text-uppercase" value="Actualizar">
          </form>
        </div>

      </div>
</div>


  </main>
  <!-- EndMain -->

  <!-- Footer -->


      <?php require_once "../modules/footer.php";?>

    </footer>
    <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
