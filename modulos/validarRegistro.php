<?php

  function validarRegistro($camposAValidar) {

    $errores = [];

        /***validaciones***/
        //nombre
        $patron = "/^[a-z ,.'-]+$/i";
        if (isset($camposAValidar["nombre"])) {

          if (strlen($camposAValidar["nombre"]) < 4) {
            $errores["nombre"] = "El nombre debe contener 4 o mas caracteres.";
          } elseif (!preg_match($patron, $camposAValidar["nombre"])){
            $errores["nombre"] = "<br> El nombre debe contener solo letras.";
          }
        }

        //email
        if (isset($camposAValidar["correo"])) {

          if (!filter_var($camposAValidar["correo"], FILTER_VALIDATE_EMAIL)) {
            $errores["correo"] = "<br> Formato incorrecto de email.";
          } elseif (emailRegistrado($camposAValidar["correo"])) {
            $errores["correo"] = "<br> El email ya se encuentra registrado.";
          }
        }

        //contraseña
        if (isset($camposAValidar["contrasenia"])) {
          if (strlen($camposAValidar["contrasenia"]) < 8) {
            $errores["contrasenia"] = "<br> La contrasenia debe tener al menos 8 caracteres.";
          } elseif (!ctype_alnum($camposAValidar["contrasenia"])){
            $errores["contrasenia"] = "<br> La contraseña debe ser alfanumerica.";
          }
        }

        //confirmaContra
        if (isset($camposAValidar["confirmaContra"])) {
          if (!($camposAValidar["contrasenia"] == $camposAValidar["confirmaContra"])) {
              $errores["confirmaContra"] = "<br> Las contraseñas no coinciden.";
          }
        }

        //fotoPerfil
        if (isset($_FILES["fotoPerfil"])) {

          $extension = pathinfo($_FILES["fotoPerfil"]["name"], PATHINFO_EXTENSION);

          if ($_FILES["fotoPerfil"]["error"] != 0) {
            $errores["fotoPerfil"] = "<br> Hubo un problema al cargar la foto.";
          }elseif(($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")){
            $errores["fotoPerfil"] = "<br> La foto debe ser png, jpg o jpeg.";
          }elseif ($_FILES["fotoPerfil"]["size"] > 5000000) {
            $errores["fotoPerfil"] = "<br> La foto no debe superar los 5MB";
          }

        }
        /***EndValidaciones***/

        return $errores;

  }


  function persistir($errores, $campo){

    if ($_POST) {
      if (empty($errores[$campo])) {
        return $_POST[$campo];
      }else  {
        return "";
      }
    }

  }


  function sinErrores(){

    return $errores = [
      "nombre" => "",
      "correo" => "",
      "contrasenia" => "",
      "confirmaContra" => "" ,
      "fotoPerfil" => ""
    ];

  }


  function emailRegistrado($mailComprobar){

      $registrado = false;
      $users =  json_decode(file_get_contents("../database/users.json"), true);

      foreach ($users as $usuario) {

          if ($usuario["correo"] == $mailComprobar) {
            $registrado = true;
          }

      }

    return $registrado;
}
//Agregado el 29/11
function ValidarLogin($mails,$passw){ //Valida el usuario y la contraseña, comparando con el mail registrado en el archivo json, recibe por parametro los datos ingresados en el login
  $valido = false;
    $users =  json_decode(file_get_contents("../database/users.json"), true);

     foreach ($users as $usuario) {
      if ($usuario["correo"] == $_POST["correo"] && password_verify($_POST['contrasenia'], $usuario['contrasenia'])) {
        $valido = true;
      }
    }

    return $valido;
}

 ?>
