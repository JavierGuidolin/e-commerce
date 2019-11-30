<?php

  function recuperarPassword($email){
      $retorno = "El email no se encuentra registrado";
      $users = json_decode(file_get_contents("../database/users.json"), true);


      foreach ($users as $key => $usuario) {

          if ($email == $usuario["correo"]) {

              $nuevaPass = $my_rand_strng = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789"), -8);
              $users[$key]["contrasenia"] = password_hash($nuevaPass, PASSWORD_DEFAULT);

              //datos para el mail
              $para = $email;
              $titulo = "Reset Pass | Bookstore";
              $mensaje = "Tu nueva pass para Bookstore es: $nuevaPass";
              $cabeceras = 'From: bookstore@bookstore.com' . "\r\n" .
                            'Reply-To: bookstore@bookstore.com' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

              //envia mail
              //$mailenviado = mail($para, $titulo, $mensaje, $cabeceras);
              $mailEnviado = true;

              //si el mail se envia guardo la nueva pass
              if ($mailEnviado) {
                $users = json_encode($users);
                $insercionDato = file_put_contents("../database/users.json", $users);
              }

            //return $retorno = "Verfique su casilla de email para ver su nueva contraseña.";
            return $retorno = "Su nueva contraseña es $nuevaPass";
      }
    }

    return $retorno;
  }

 ?>
