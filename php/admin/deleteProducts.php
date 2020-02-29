<?php

require_once '../autoload.php';

if (!$_SESSION['email'] && $_SESSION['rol'] != 1) { // Debe existir un usuario logueado y que se admin para pasar
    header('Location: ../../index.php');
}

if (isset($_GET['id'])) {

    $bookEdit = BookController::findBookById($_GET['id']);
    $categories = CategoryController::getCategories();

    if ($bookEdit) { // Valido que el libro a borrar exista en la BD

        if ($_POST) {

            $DeleteResult = BookController::deleteBook($_GET['id'], $bookEdit->getCover()); // lo borro

            if ($DeleteResult) {
                header('Location:admin.php');
                exit;
            }

        }

    } else { // Si el libro no existe redirijo a admin
        header('Location: admin.php');
       
    }

} else {
    header('Location: admin.php');
}

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
        <li class="nav-item">
            <a class="nav-link" href="admin.php">Productos</a>
        </li>
        </ul>
    </div>
    </nav>

     <!-- Delete Result -->
     <?php if (isset($DeleteResult)): ?>
          <div class="alert alert-danger" role="alert">
            Ha ocurrido un error. <a href="admin.php" class="alert-link">Volver</a>
          </div>
    <?php endif;?>
      <!-- Delete Result -->

      <div class="container">

<div class="row">

    <div class="col-6 mx-auto mt-2">

    <h2 class="text-center m-2">Eliminar libro.</h2>

    <form method="post" action="deleteProducts.php?id=<?=$bookEdit->getId()?>">

        <div class="form-group">
            <label for="exampleInputEmail1">Titulo del libro</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title" value="<?=$bookEdit->getTitle()?>" readonly>
            <small id="nameHelp" class="mb-3 form-text text-danger"><?=isset($errors['title']) ? $errors['title'] : ""?></small>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Resume</label>
            <textarea name="resume" class="form-control" id="exampleFormControlTextarea1" rows="3" readonly><?=$bookEdit->getResume()?></textarea>
            <small id="nameHelp" class="mb-3 form-text text-danger"><?=isset($errors['resume']) ? $errors['resume'] : ""?></small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" step="0.1" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title" value="<?=$bookEdit->getPrice()?>" readonly>
            <small id="nameHelp" class="mb-3 form-text text-danger"><?=isset($errors['price']) ? $errors['price'] : ""?></small>
        </div>


        <div class="form-group ">
                <label for="inputState">Categoria</label>
                <select id="inputState" class="form-control" name="category" readonly>
                    <option value="">Seleccionar categoria...</option>
                    <?php foreach ($categories as $category): ?>
                        <?php if ($bookEdit->getCategory()->getName() == $category['id']): ?>
                            <option value="<?=$category['id']?>" <?='selected'?>>
                                <?=$category['name']?>
                            </option>
                        <?php else: ?>
                            <option value="<?=$category['id']?>">
                                <?=$category['name']?>
                            </option>
                        <?php endif;?>

                    <?php endforeach;?>
                </select>
                <small id="nameHelp" class="mb-3 form-text text-danger"><?=isset($errors['category']) ? $errors['category'] : ""?></small>
        </div>


        <button type="submit" class="btn btn-danger" name="delete">Borrar</button>
        <a class="btn btn-info" href="admin.php">No borrar</a>

    </form>

    </div>
</div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
