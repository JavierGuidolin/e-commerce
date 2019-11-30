<?php session_start(); ?>
<!-- Navegacion -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top">

  <a href="../index.php" class="navbar-brand">
    <img class="__logo" src="../img/bs-logo.png" alt="Logo BookStore">
  </a>

  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
    <i class="fas fa-bars"></i>
  </button>

  <div id="navbarCollapse" class="collapse navbar-collapse">

    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a href="../index.php" class="nav-link">
          <i class="__icono-nav fas fa-home pr-2"></i> Inicio</a>
      </li>

      <li class="nav-item">
        <a href="faq.php" class="nav-link">
          <i class="__icono-nav fas fa-question-circle pr-2"></i> FAQ</a>
      </li>

      <li class="nav-item">
        <a href="faq.php" class="nav-link">
          <i class="__icono-nav fas fa-users pr-2"></i> Quienes somos</a>
      </li>

      <li class="nav-item">
        <a href="contact.php" class="nav-link">
          <i class="__icono-nav far fa-id-card pr-2"></i> Contacto</a>
      </li>

      <li class="nav-item">
        <a href="products.php" class="nav-link">
          <i class="__icono-nav fas fa-book pr-2"></i> Books</a>
      </li>

    </ul>

    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown mr-3">

        <a href="cart.php" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <i class="__icono-carrito fas fa-shopping-cart"></i>
        </a>

        <div class="dropdown-menu">
          <a href="cart.php" class="dropdown-item pl-2">
            <i class="dropdown-icon fas fa-gift pr-2"></i> Wish list</a>
          <a href="cart.php" class="dropdown-item pl-2">
            <i class="dropdown-icon fas fa-shipping-fast pr-2"></i>Pedidos</a>
          <a href="cart.php" class="dropdown-item pl-2">
            <i class="dropdown-icon fas fa-thumbs-down pr-2"></i> Cancelar pedido</a>
        </div>
      </li>

      <li class="nav-item">
        <form class="form-inline my-2 my-lg-0">
          <div class="input-group input-group-sm mb-1">
            <input type="text" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-sm btn-outline-secondary" type="button"> <i class="fas fa-search"></i> </button>
            </div>
          </div>
        </form>
      </li>

      <li class="nav-item dropdown">

        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <i class="__icono-usuario fas fa-user-circle pr-1 pl-2"></i><?php if ($_SESSION) {
           echo $_SESSION["user"];}else {
             echo "Perfil";
           }?></a>

        <div class="dropdown-menu dropdown-menu-right">
          <a href="register.php" class="dropdown-item pl-2 "><i class="dropdown-icon fas fa-user-edit pr-2"></i> Registrarse</a>
          <a href="loginbeta.php" class="dropdown-item pl-2"><i class="dropdown-icon fas fa-sign-in-alt pr-2"></i> Iniciar sesion</a>
          <a href="userAccount.php" class="dropdown-item pl-2"><i class="dropdown-icon fas fa-sign-in-alt pr-2"></i> Mi cuenta</a>
          <div class="dropdown-divider"></div>
          <a href="#"  class="dropdown-item pl-2"><i class="fas fa-door-open pr-2"></i>Salir</a>
        </div>

      </li>
    </ul>
  </div>

</nav>
<!-- EndNavegacion -->
