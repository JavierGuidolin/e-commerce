<?php

session_start();
      require_once ("../modulos/validarRegistro.php");
      $resultadoValidacion = sinErrores();

      $cargaArchivo = $insercionDato = "";

        if ($_POST && $_FILES) {

          $resultadoValidacion = validarRegistro($_POST); //Esta funcion devuelve los errores de la validacion

          if (empty($resultadoValidacion)) { //Si el resultado de la funcion varlidar Registro es vacio, procede a la carga de datos

              $arrayUsuarios = json_decode(file_get_contents("../database/users.json"), true); //Trae el archivo con formato json y lo convierte en array
              $idNuevo = count($arrayUsuarios["users"]) + 1; //Cuenta la cantidad de usuarios y le suma 1 para el nuevo usuario

              $extension = pathinfo($_FILES["fotoPerfil"]["name"], PATHINFO_EXTENSION); //Obtiene la extension de la imagen a cargar y la guarda en la variable $extension
              $cargaArchivo = move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"], "../img/fotos-usuarios/". $idNuevo . "." . $extension);

              $usuarioNuevo = [  //Carga los datos a registrar en el array $usuarioNuevo
                "id" => $idNuevo,
                "nombre" => $_POST["nombre"],
                "correo" => $_POST["correo"],
                "contrasenia" => password_hash($_POST["contrasenia"], PASSWORD_DEFAULT),
                "fotoPerfil" => "../img/fotos-usuarios/" . $idNuevo. "." . $extension ,
              ];


              $arrayUsuarios["users"][] = $usuarioNuevo;

              $usuarioFinal = json_encode($arrayUsuarios);
              $insercionDato = file_put_contents("../database/users.json", $usuarioFinal);

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

    <?php require_once("../modulos/navigationBar.php"); ?>

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

      <?php if ($cargaArchivo && $insercionDato != 0 ): ?>
        <div class="alert alert-success" role="alert">
          Usuario registrado satisfactoriamente. <a class="alert-link">Ya puedes loguearte</a>
        <?php $_POST = ""; ?>
        </div>
      <?php endif; ?>


    </section>

    <div class="container-login">
      <div class="login-container">
        <div class="register">
          <h2>Registrarse</h2>
          <form action="register.php" method="post" enctype="multipart/form-data">

            <input type="text" class="mb-1" name="nombre" placeholder="Nombre" class="nombre" value="<?=persistir($resultadoValidacion, 'nombre'); ?>">
            <small id="nameHelp" class="mb-3 form-text text-danger"><?= isset($resultadoValidacion['nombre']) ? $resultadoValidacion['nombre'] : "" ?></small>

            <input type="email" class="mb-1" name="correo" placeholder="Correo" class="correo" value="<?=persistir($resultadoValidacion, 'correo'); ?>" >
            <small id="nameHelp" class="mb-3 form-text text-danger"><?= isset($resultadoValidacion['correo']) ? $resultadoValidacion['correo'] : "" ?></small>

            <input type="password" class="mb-1" name="contrasenia" placeholder="Contraseña" class="pass">
            <small id="nameHelp" class="mb-3 form-text text-danger"><?= isset($resultadoValidacion['contrasenia']) ? $resultadoValidacion['contrasenia'] : "" ?></small>

            <input type="password" class="mb-1" name="confirmaContra" placeholder="Confirma contraseña" class="repass">
            <small id="nameHelp" class="mb-3 form-text text-danger"><?= isset($resultadoValidacion['contrasenia']) ? $resultadoValidacion['contrasenia'] : "" ?></small>

            <div class="input-group mb-2">
                <div class="custom-file">
                  <input type="file" name="fotoPerfil" class="custom-file-input">
                  <label class="custom-file-label __perfil-pic">Foto de perfil</label>
                </div>
            </div>
            <small id="nameHelp" class="mb-3 form-text text-danger"><?= isset($resultadoValidacion['fotoPerfil']) ? $resultadoValidacion['fotoPerfil'] : "" ?></small>

            <div class="form-check">
              <div class="form-group">
                <input class="form-check-input" name="recordarme" type="checkbox" value="recordarme" id="recordarme">
                <label class="form-check-label" for="recordarme">
                  Recordarme
                </label>
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

    <?php require_once("../modulos/footer.php"); ?>

  </footer>
  <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
