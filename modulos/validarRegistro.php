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
          $errores["nombre"] = "El nombre debe contener solo letras.";
        }
      }

      //apellido
      if (isset($camposAValidar["apellido"])) {

        if (strlen($camposAValidar["apellido"]) < 4) {
          $errores["apellido"] = "El apellido debe contener 4 o mas caracteres.";
        } elseif (!preg_match($patron, $camposAValidar["apellido"])){
          $errores["apellido"] = "El apellido debe contener solo letras.";
        }
      }

      //direccion

      if (isset($camposAValidar["direccion"])) {
        if (strlen($camposAValidar["direccion"]) < 4) {
          $errores["direccion"] = "La direccion debe contener 4 o mas caracteres.";
        }
      }

      //ciudad
      $patron = "/^[a-z ,.'-]+$/i";
      if (isset($camposAValidar["ciudad"])) {

        if (strlen($camposAValidar["ciudad"]) < 4) {
          $errores["ciudad"] = "La ciudad debe contener 4 o mas caracteres.";
        } elseif (!preg_match($patron, $camposAValidar["ciudad"])){
          $errores["ciudad"] = "La ciudad debe contener solo letras.";
        }
      }

      //cp
      if (isset($camposAValidar["cp"])) {

          if (strlen($camposAValidar["cp"]) < 4) {
            $errores["cp"] = "El C.P. debe contener 4 o mas caracteres.";
          } elseif (!is_numeric($camposAValidar["cp"])){
            $errores["cp"] = "El C.P. debe contener solo numeros.";
          }
        }

      //provincia
      if (isset($camposAValidar["provincia"])) {
        if ($camposAValidar["provincia"] != "mza" && $camposAValidar["provincia"] != "sju" && $camposAValidar["provincia"] != "slu") {
          $errores["provincia"] = "Debe seleccionar provincia.";
        }
      }

      //email
      if (isset($camposAValidar["correo"])) {

        if (!filter_var($camposAValidar["correo"], FILTER_VALIDATE_EMAIL)) {
          $errores["correo"] = "Formato incorrecto de email.";
        } elseif ($camposAValidar["actualizarData"]!=2) {
        if (emailRegistrado($camposAValidar["correo"])) {
          $errores["correo"] = "El email ya se encuentra registrado.";
        }
        }
      }

      //telefono
      if (isset($camposAValidar["telefono"])) {

          if (strlen($camposAValidar["telefono"]) < 7) {
            $errores["telefono"] = "El telefono debe contener 7 o mas digitos.";
          } elseif (!is_numeric($camposAValidar["telefono"])){
            $errores["telefono"] = "El telefono debe contener solo numeros.";
          }
        }

      //contraseña
      if (isset($camposAValidar["contrasenia"])) {
        if (strlen($camposAValidar["contrasenia"]) < 8) {
          $errores["contrasenia"] = "La contrasenia debe tener al menos 8 caracteres.";
        } elseif (!ctype_alnum($camposAValidar["contrasenia"])){
          $errores["contrasenia"] = "La contraseña debe ser alfanumerica.";
        }
      }

      //confirmaContra
      if (isset($camposAValidar["confirmaContra"])) {
        if (!($camposAValidar["contrasenia"] == $camposAValidar["confirmaContra"])) {
            $errores["confirmaContra"] = "Las contraseñas no coinciden.";
        }
      }

      //fotoPerfil
      if (isset($_FILES["fotoPerfil"]["name"]) && !empty($_FILES["fotoPerfil"]["name"])) {

        $extension = pathinfo($_FILES["fotoPerfil"]["name"], PATHINFO_EXTENSION);

        if ($_FILES["fotoPerfil"]["error"] != 0) {
          $errores["fotoPerfil"] = "Hubo un problema al cargar la foto.";
        }elseif($_FILES["fotoPerfil"]["error"] == 4){
            $errores["fotoPerfil"] = "";
        }elseif(($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")){
          $errores["fotoPerfil"] = "La foto debe ser png, jpg o jpeg.";
        }elseif ($_FILES["fotoPerfil"]["size"] > 5000000) {
          $errores["fotoPerfil"] = "La foto no debe superar los 5MB";
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
      "apellido" => "",
      "direccion" => "",
      "ciudad" => "",
      "provincia" => "",
      "cp" => "",
      "correo" => "",
      "telefono" => "",
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




function actualizarContraseña($email, $contrasenia, $confirmaContra){

  $users =  json_decode(file_get_contents("../database/users.json"), true);

  foreach ($users as $key => $usuario) {

   if ($usuario["correo"] == $email) {

     if ($contrasenia != $confirmaContra) {
       return "Las contraseñas no coinciden. Intente nuevamente!";
     }elseif(strlen($contrasenia) < 8){
       return "La nueva contraseña debe contener al menos 8 caracteres";
     }elseif (!ctype_alnum($contrasenia)) {
       return "La nueva contraseña debe ser alfanumerica.";
     }else {
       $users[$key]["contrasenia"] = password_hash($contrasenia, PASSWORD_DEFAULT);
       $users = json_encode($users);
       $insercionDato = file_put_contents("../database/users.json", $users);
       return "Contraseña actualizada correctamente!";
     }
   }

 }
}

function recuperarUsuario($email){
    $users =  json_decode(file_get_contents("../database/users.json"), true);
    foreach ($users as $usuario) {
     if ($usuario["correo"] == $email) {
       return $usuario;
     }
  }
}

function recuperarTodosUsuarios(){
  $users =  json_decode(file_get_contents("../database/users.json"), true);
  return $users;
}

 ?>
