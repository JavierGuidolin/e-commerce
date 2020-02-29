<?php

    require_once '../autoload.php';
    Authenticator::initSession();

    if (!$_SESSION['email'] && $_SESSION['rol'] != 1) { // Debe existir un usuario logueado y que se admin para pasar
        header('Location: index.php');
    }

    $books = BookController::listAllBooks(); // Traigo todos los libros para listarlos

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/7c3c4957c1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">

  <link rel="shortcut icon" type="image/png" href="../img/bs-favicon.png" />
  <title> BookStore | Admin</title>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="admin.php">BookStore | Admin Page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-auto" id="navbarNav">
        <ul class="navbar-nav ml-auto">

        <li class="nav-item active">
            <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="insertProducts.php">Productos</a>
        </li>

        </ul>
    </div>
    </nav>

    <div class="container">
        <div class="row">

        <?php if($books): ?>

            <?php foreach ($books as $book): ?>

                <div class="col-md-4 col-lg-3 text-center">
                    <div class="card mt-2">
                        <h5 class="p-2"><?=$book['title']?></h5>
                        <img class=" pb-2 col-12" src="../../img/libros-portadas/<?=$book['cover']?>" alt="<?=$book['title']?>">
                        <a class="btn btn-info" href="updateProducts.php?id=<?=$book['id']?>"> Editar </a>
                        <a class="btn btn-danger" href="deleteProducts.php?id=<?=$book['id']?>"> Eliminar </a>
                    </div>
                </div>

            <?php endforeach;?>

            <?php else: ?>
                <div class="col-12 mt-5">
                    <h2 class="text-center">No hay productos cargados</h2>
                    <p class="text-center mx-auto" ><a  href="insertProducts.php">Cargar un producto.</a></p>
                </div>
            <?php endif; ?>

        </div>
    </div>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
