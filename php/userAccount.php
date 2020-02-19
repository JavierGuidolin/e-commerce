<?php
require_once 'autoload.php';

if (!$_SESSION['email']) {
    header('Location: register.php'); // Debe haber un usuario logeado para ver esta seccion
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


    <section id="profile">

      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container mb-4">

    <div class="row">


        <div class="col-lg-12 pb-5">

            <!-- Account Sidebar-->
            <div class="author-card pb-3">

                <div> <h3 class="text-center">Bienvenido  <?=$_SESSION['name'] . ' ' . $_SESSION['surname']?></h3></div>
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
                    <a class="list-group-item" href="updateProfile.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fa fa-tag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Actualizar Perfil</div>
                            </div><span class="badge badge-secondary">4</span>
                        </div>
                    </a>

                    <?php if ($_SESSION['rol'] == 1): /*Si es admin habilitar esta opcion*/ ?>
                      <a class="list-group-item" href="admin/admin.php">
                          <div class="d-flex justify-content-between align-items-center">
                              <div><i class="fa fa-tag mr-1 text-muted"></i>
                                  <div class="bg-info text-white d-inline-block font-weight-medium text-uppercase">ADMIN SITE</div>
                              </div><span class="badge badge-secondary">4</span>
                          </div>
                      </a>
                    <?php endif;?>

                </nav>
            </div>
        </div>
        <!-- Wishlist-->

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