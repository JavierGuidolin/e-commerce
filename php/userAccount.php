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


      <?php if (isset($_GET["edicion"]) && $_GET["edicion"] == "end"): ?>
        <div class="alert alert-success" role="alert">
          Datos actualizados correctamente.
        </div>
      <?php endif;?>

      <?php if (isset($contraseniaActualizada)): ?>
        <div class="alert alert-success" role="alert">
          <?=$contraseniaActualizada?>
        </div>
      <?php endif;?>


    <section id="profile">

      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container mb-4">

    <div class="row">


        <div class="col-lg-4 pb-5">

            <!-- Account Sidebar-->
            <div class="author-card pb-3">

                <div class="author-card-profile">
                    <div class="author-card-avatar"><img src="<?=$dataUsuario["fotoPerfil"]?>" alt="Foto de perfil">
                    </div>
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg"><?=$dataUsuario["nombre"] . " " . $dataUsuario["apellido"]?></h5><span class="author-card-position">Joined February 06, 2017</span>
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

                      <div class="row">
                        <div class="col">
                          <label for="nombre">Nombre</label>
                          <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value="<?=$dataUsuario["nombre"]?>" <?=$disableInput?>>
                          <small id="nameHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['nombre']) ? $resultadoValidacion['nombre'] : ""?></small>
                        </div>
                        <div class="col">
                          <label for="apellido">Apellido</label>
                          <input type="text" id="apellido" class="form-control" name="apellido" placeholder="Apellido" value="<?=$dataUsuario["apellido"]?>" <?=$disableInput?>>
                          <small id="apellidoHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['apellido']) ? $resultadoValidacion['apellido'] : ""?></small>
                        </div>
                      </div>

                      <div class="form-group">
                            <div class="col-xs-6">
                                <label for="direccion">Direccion</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" value="<?=$dataUsuario["direccion"]?>" <?=$disableInput?>>
                                <small id="direccionHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['direccion']) ? $resultadoValidacion['direccion'] : ""?></small>
                            </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="ciudad">Ciudad</label>
                          <input type="text" placeholder="Ciudad" class="form-control" id="ciudad" name="ciudad" value="<?=$dataUsuario["ciudad"]?>" <?=$disableInput?>>
                          <small id="ciudadHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['ciudad']) ? $resultadoValidacion['ciudad'] : ""?></small>
                        </div>

                        <div class="form-group col-md-4">
                          <label for="provincia">Provincia</label>
                          <select id="provincia" class="form-control" name="provincia" <?=$disableInput?>>

                            <option selected>Elegir...</option>

                            <?php if ($dataUsuario["provincia"] == "mza"): ?>
                              <option value="mza" selected>Mendoza</option>
                            <?php else: ?>
                              <option value="mza">Mendoza</option>
                            <?php endif;?>

                            <?php if ($dataUsuario["provincia"] == "slu"): ?>
                              <option value="slu" selected>San Luis</option>
                            <?php else: ?>
                                <option value="slu">San Luis</option>
                            <?php endif;?>

                            <?php if ($dataUsuario["provincia"] == "sju"): ?>
                              <option value="sju" selected>San Juan</option>
                            <?php else: ?>
                              <option value="sju">San Juan</option>
                            <?php endif;?>

                          </select>
                          <small id="provinciaHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['provincia']) ? $resultadoValidacion['provincia'] : ""?></small>
                        </div>

                        <div class="form-group col-md-2">
                          <label for="cp">C. Postal</label>
                          <input type="number" class="form-control" id="cp" name="cp" placeholder="CP" value="<?=$dataUsuario["cp"]?>" <?=$disableInput?>>
                          <small id="cpHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['cp']) ? $resultadoValidacion['cp'] : ""?></small>
                        </div>
                      </div>

                      <div class="row">
                          <div class="col">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="correo" class="form-control" placeholder="Email" value="<?=$dataUsuario["correo"]?>" disabled>
                            <small id="emailHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['correo']) ? $resultadoValidacion['correo'] : ""?></small>
                          </div>
                          <div class="col">
                            <label for="telefono">Telefono</label>
                            <input type="text" id="telefono" class="form-control" name="telefono" placeholder="Telefono" value="<?=$dataUsuario["telefono"]?>" <?=$disableInput?>>
                            <small id="telefono" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['telefono']) ? $resultadoValidacion['telefono'] : ""?></small>
                          </div>
                        </div>

                        <div class="form-group col-md-12">
                          <a class="text-muted" href="" data-toggle="modal" data-target="#resetPass"> <i class="fas fa-key"></i> Cambiar contraseña</a>
                        </div>


                        <?php if ($disableInput != "disabled"): ?>
                          <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="fotoPerfil" name="fotoPerfil">
                                <label class="custom-file-label" for="customFile">Foto de perfil</label>
                            </div>
                            <small id="nameHelp" class="mb-3 form-text text-danger"><?=isset($resultadoValidacion['fotoPerfil']) ? $resultadoValidacion['fotoPerfil'] : ""?></small>
                          </div>

                        <div class="form-group">
                          <div class="col-xs-12">
                              <br>
                              <button class="btn btn-success" type="submit"> Guardar</button>
                              <button class="btn" type="button"> Cancelar</button>
                          </div>
                        </div>
                        <?php endif;?>

                  </form>
                </hr>
             </div>
        </div>
    </div>
</div>
    </section>

    <div class="modal fade" id="resetPass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Recordar contraseña</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="userAccount.php" method="POST">
              <div class="form-group">
                <label for="contrasenia" class="col-form-label">Contraseña:</label>
                <input type="password" class="form-control __resetPass" id="contrasenia" name="contrasenia" placeholder="Nueva contraseña...">
              </div>
              <div class="form-group">
                <label for="confirmaContra" class="col-form-label">Repetir contraseña:</label>
                <input type="password" class="form-control __resetPass" id="confirmaContra" name="confirmaContra" placeholder="Repetir contraseña...">
              </div>

              <div class="modal-footer">
                <button type="button" class="__closemodal" data-dismiss="modal">Close</button>
                <button type="submit" class="__sendEmail">Actualizar</button>
              </div>
            </form>
          </div>
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
