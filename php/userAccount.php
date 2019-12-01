<?php

  session_start();

  if (!isset($_SESSION["user"])) {

    header("Location: ../index.php");

  }else{

    require_once ("../modulos/validarRegistro.php");
    $resultadoValidacion = sinErrores();
    $dataUsuario = recuperarUsuario($_SESSION["user"]);

      if ($_POST && $_FILES) {

        $resultadoValidacion = validarRegistro($_POST); //Esta funcion devuelve los errores de la validacion

          if (empty($resultadoValidacion)) { //Si el resultado de la funcion varlidar Registro es vacio, procede a la carga de datos

            $users = json_decode(file_get_contents("../database/users.json"), true); //Trae el archivo con formato json y lo convierte en array

            if (!empty($_FILES["fotoPerfil"]["name"])) { //Compruebo si sube foto
              $extension = pathinfo($_FILES["fotoPerfil"]["name"], PATHINFO_EXTENSION); //Obtiene la extension de la imagen a cargar y la guarda en la variable $extension
              $cargaArchivo = move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"], "../img/fotos-usuarios/". $idNuevo . "." . $extension);
              $path = "../img/fotos-usuarios/" . $dataUsuario["id"] . "." . $extension;
            }else{
              $path = $dataUsuario["fotoPerfil"];
            }

            foreach ($users as $key => $usuario) {
              if ($usuario["correo"] == $dataUsuario["correo"] ) {
                $users[$key]["nombre"] = $_POST["nombre"];
                $users[$key]["correo"] = $_POST["correo"];
                $users[$key]["contrasenia"] = password_hash($_POST["contrasenia"], PASSWORD_DEFAULT);
                $users[$key]["fotoPerfil"] = $path;
                break;
              }

            }

            $usuarioFinal = json_encode($users);
            $insercionDato = file_put_contents("../database/users.json", $usuarioFinal);

          }
          header("Location: userAccount.php?actualiza=end");
        }

        //Por defecto no muestro el form de datos. Si lo pide lo despliego
        $display ="d-none";
        if (isset($_GET["editar"]) && ($_GET["editar"]) == "editar") {
          $display= "d-block";
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

    <?php require_once("../modulos/navigationBar.php"); ?>

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


      <?php if (isset($_GET["actualiza"]) && $_GET["actualiza"] == "end" ): ?>
        <div class="alert alert-success" role="alert">
          Datos actualizados correctamente.
        </div>
      <?php endif; ?>


    <section id="profile">

      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container mb-4">

    <div class="row">


        <div class="col-lg-4 pb-5">

            <!-- Account Sidebar-->
            <div class="author-card pb-3">

                <div class="author-card-profile">
                    <div class="author-card-avatar"><img src="<?= $dataUsuario["fotoPerfil"]?>" alt="h">
                    </div>
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg"><?= $dataUsuario["nombre"] ?></h5><span class="author-card-position">Joined February 06, 2017</span>
                    </div>
                </div>
            </div>
            <div class="wizard">
                <nav class="list-group list-group-flush">
                  <a class="list-group-item" href="userAccount.php?editar=editar">
                  <div class="d-flex justify-content-between align-items-center">
                      <div><i class="fa fa-shopping-bag mr-1 text-muted"></i>
                          <div class="d-inline-block font-weight-medium text-uppercase">Configurar perfil</div>
                      </div><span class="badge badge-secondary"></span>
                  </div>
                    </a>
                    <a class="list-group-item" href="cart.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fa fa-shopping-bag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Lista de pedidos</div>
                            </div><span class="badge badge-secondary">6</span>
                        </div>
                    </a>

                    <a class="list-group-item" href="#">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fa fa-heart mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Lista de deseados</div>
                            </div><span class="badge badge-secondary">3</span>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fa fa-tag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Mis cupones</div>
                            </div><span class="badge badge-secondary">4</span>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <!-- Wishlist-->

        <div class="col-lg-8 pb-5">
            <!-- Item-->
            <div class="tab-pane active <?php echo $display ?>" id="home">
              <h2>Actualizar mis datos</h2>
                <hr>
                  <form action="userAccount.php" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="actualizarData" value="2">

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="nombre">Nombre</label>
                              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?= $dataUsuario["nombre"]?>">
                              <small id="nameHelp" class="mb-3 form-text text-danger"><?= isset($resultadoValidacion['nombre']) ? $resultadoValidacion['nombre'] : "" ?></small>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="correo">Email</label>
                              <input type="email" class="form-control" name="correo" id="correo" placeholder="email@email.com" value="<?= $dataUsuario["correo"]?>">
                              <small id="nameHelp" class="mb-3 form-text text-danger"><?= isset($resultadoValidacion['correo']) ? $resultadoValidacion['correo'] : "" ?></small>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="contrasenia">Contraseña</label>
                              <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="password">
                              <small id="nameHelp" class="mb-3 form-text text-danger"><?= isset($resultadoValidacion['contrasenia']) ? $resultadoValidacion['contrasenia'] : "" ?></small>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="confirmaContra">Repite tu contraseña</label>
                            <input type="password" class="form-control" name="confirmaContra" id="confirmaContra" placeholder="Repetir password">
                            <small id="nameHelp" class="mb-3 form-text text-danger"><?= isset($resultadoValidacion['contrasenia']) ? $resultadoValidacion['contrasenia'] : "" ?></small>
                          </div>
                      </div>

                      <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fotoPerfil" name="fotoPerfil">
                            <label class="custom-file-label" for="customFile">Foto de perfil</label>
                        </div>
                        <small id="nameHelp" class="mb-3 form-text text-danger"><?= isset($resultadoValidacion['fotoPerfil']) ? $resultadoValidacion['fotoPerfil'] : "" ?></small>
                      </div>

                      <div class="form-group">
                        <div class="col-xs-12">
                            <br>
                            <button class="btn btn-success" type="submit"> Guardar</button>
                            <button class="btn" type="button"> Cancelar</button>
                        </div>
                      </div>

                </form>

              </hr>

             </div>
            <!-- Item-->

            <!-- Item-->


        </div>
    </div>
</div>
    </section>
  </main>
  <!-- EndMain -->

  <!-- Footer -->


      <?php require_once("../modulos/footer.php"); ?>

    </footer>
    <!-- Footer -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
