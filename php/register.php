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

      <?php if ($cargaArchivo && $insercionDato != 0): ?>
        <div class="alert alert-success" role="alert">
          Usuario registrado satisfactoriamente. <a href="login.php" class="alert-link">Ya puedes loguearte</a>
        <?php $_POST = "";?>
        </div>
      <?php endif;?>


    </section>

    <div class="container-login">
      <div class="login-container">
        <div class="register">
          <h2>Registrarse</h2>
          <form action="register.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="actualizarData" value="1">

            <div class="row">
              <div class="col">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value="<?=persistir($resultadoValidacion, "nombre")?>">
                <small id="nameHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['nombre']) ? $resultadoValidacion['nombre'] : ""?></small>
              </div>
              <div class="col">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" class="form-control" name="apellido" placeholder="Apellido" value="<?=persistir($resultadoValidacion, "apellido")?>">
                <small id="apellidoHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['apellido']) ? $resultadoValidacion['apellido'] : ""?></small>
              </div>
            </div>

            <div class="form-group">
                  <div class="col-xs-6">
                      <label for="direccion">Direccion</label>
                      <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" value="<?=persistir($resultadoValidacion, "direccion")?>">
                      <small id="direccionHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['direccion']) ? $resultadoValidacion['direccion'] : ""?></small>
                  </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="ciudad">Ciudad</label>
                <input type="text" placeholder="Ciudad" class="form-control" id="ciudad" name="ciudad" value="<?=persistir($resultadoValidacion, "ciudad")?>">
                <small id="ciudadHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['ciudad']) ? $resultadoValidacion['ciudad'] : ""?></small>
              </div>

              <div class="form-group col-md-4">
                <label for="provincia">Provincia</label>
                <select id="provincia" class="form-control" name="provincia">

                  <option selected>Elegir...</option>

                  <?php if (persistir($resultadoValidacion, "provincia") == "mza"): ?>
                    <option value="mza" selected>Mendoza</option>
                  <?php else: ?>
                    <option value="mza">Mendoza</option>
                  <?php endif;?>

                  <?php if (persistir($resultadoValidacion, "provincia") == "slu"): ?>
                    <option value="slu" selected>San Luis</option>
                  <?php else: ?>
                      <option value="slu">San Luis</option>
                  <?php endif;?>

                  <?php if (persistir($resultadoValidacion, "provincia") == "sju"): ?>
                    <option value="sju" selected>San Juan</option>
                  <?php else: ?>
                    <option value="sju">San Juan</option>
                  <?php endif;?>

                </select>
                <small id="provinciaHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['provincia']) ? $resultadoValidacion['provincia'] : ""?></small>
              </div>

              <div class="form-group col-md-2">
                <label for="cp">C. Postal</label>
                <input type="number" class="form-control" id="cp" name="cp" placeholder="CP" value="<?=persistir($resultadoValidacion, "cp")?>">
                <small id="cpHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['cp']) ? $resultadoValidacion['cp'] : ""?></small>
              </div>
            </div>

            <div class="row">
                <div class="col">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="correo" class="form-control" placeholder="Email" value="<?=persistir($resultadoValidacion, "correo")?>">
                  <small id="emailHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['correo']) ? $resultadoValidacion['correo'] : ""?></small>
                </div>
                <div class="col">
                  <label for="telefono">Telefono</label>
                  <input type="text" id="telefono" class="form-control" name="telefono" placeholder="Telefono" value="<?=persistir($resultadoValidacion, "telefono")?>">
                  <small id="telefono" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['telefono']) ? $resultadoValidacion['telefono'] : ""?></small>
                </div>
              </div>

              <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="fotoPerfil" name="fotoPerfil">
                    <label class="custom-file-label" for="customFile">Foto de perfil</label>
                </div>
                <small id="nameHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['fotoPerfil']) ? $resultadoValidacion['fotoPerfil'] : ""?></small>
              </div>

              <div class="row">
                <div class="col">
                  <label for="contrasenia">Contraseña</label>
                  <input type="password" id="contrasenia" name="contrasenia" class="form-control" placeholder="Contraseña">
                  <small id="passHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['contrasenia']) ? $resultadoValidacion['contrasenia'] : ""?></small>
                </div>
                <div class="col">
                  <label for="confirmaContra">Confirmar Contraseña</label>
                  <input type="password" id="confirmaContra" class="form-control" name="confirmaContra" placeholder="Repetir contraseña">
                  <small id="confirmaContraHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['confirmaContra']) ? $resultadoValidacion['confirmaContra'] : ""?></small>
                </div>
              </div>

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

    <?php require_once "../modules/footer.php";?>

  </footer>
  <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
