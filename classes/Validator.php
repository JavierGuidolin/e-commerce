<?php

class Validator
{

    public function validateRegister(Customer $user, $update)
    {

        //Validaciones reutilizadas de la version anterior!

        $errors = [];

        /***validations***/
        //name
        $pattern = "/^[a-z ,.'-]+$/i";
        $name = trim($user->getName());

        if (isset($name)) {

            if (strlen($name) < 4) {
                $errors["name"] = "El nombre debe contener 4 o mas caracteres.";
            } elseif (!preg_match($pattern, $name)) {
                $errors["name"] = "El nombre debe contener solo letras.";
            }
        }

        //apellido
        $surname = trim($user->getSurname());

        if (isset($surname)) {

            if (strlen($surname) < 4) {
                $errors["surname"] = "El apellido debe contener 4 o mas caracteres.";
            } elseif (!preg_match($pattern, $surname)) {
                $errors["surname"] = "El apellido debe contener solo letras.";
            }
        }

        //email
        if ($update != 1) {

            $email = trim($user->getEmail());
            $isEmailReg = CustomerController::findByEmail($email);

            if (isset($email)) {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors["email"] = "El email no tiene formato valido";
                } elseif ($isEmailReg) {
                    $errors["email"] = "El email ya se encuentra registrado";
                }
            }

        }

        //password
        $password = trim($user->getPassword());

        if (isset($password)) {
            if (strlen($password) < 8) {
                $errors["password"] = "La contraseña debe tener al menos 8 caracteres.";
            } elseif (!ctype_alnum($password)) {
                $errors["password"] = "La contraseña debe ser alfanumerica.";
            }
        }

        //rePassword
        $rePassword = trim($user->getRePassword());

        if (isset($rePassword)) {
            if (!($password == $rePassword)) {
                $errors["rePassword"] = "Las contraseñas no coinciden.";
            }
        }
        /***EndValidations***/

        return $errors;
    }

    public function validateLogin(Customer $user)
    {

        $errors = [];

        //email
        $email = trim($user->getEmail());

        if (isset($email)) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors["email"] = "El email no tiene formato valido";
            }
        }

        //password
        $password = trim($user->getPassword());

        if (isset($password)) {
            if (strlen($password) == 0) {
                $errors["password"] = "La contraseña no debe estar vacia";
            }
        }

        return $errors;

    }

    public function validateBook(Book $book){

        $errors = [];


        /***validations***/
        //title
        $title = trim($book->getTitle());

        if (isset($title)) {

            if (strlen($title) < 1) {
                $errors["title"] = "El titulo debe contener al menos un caracter.";
            }

        }

        //resume
        $resume = trim($book->getResume());

        if (isset($resume)) {

            if (strlen($resume) < 50 || strlen($resume) > 999) {
                $errors["resume"] = "El nombre debe contener entre 50 y 1000 caracteres.";
            }

        }


         //price
         $price = trim($book->getPrice());

         if (isset($price)) {
 
             if (!is_numeric($price)) {
                 $errors["price"] = "El precio debe contener solo numeros.";
             }
 
         }

         //cat
         $category = trim($book->getCategory()->getName());

         if (isset($category)) {
 
            if (!$category) {
                $errors["category"] = "Debe Seleccionar una categoria";
            }

        }

         //cover
         $cover = $book->getCover();

         if (isset($cover["name"]) && !empty($cover["name"])) {

            $extension = pathinfo($cover["name"], PATHINFO_EXTENSION);
    
            if($cover["error"] != 0){
                $errors["cover"] = "Hubo un problema al cargar la foto.";
            }elseif(($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")){
              $errors["cover"] = "La foto debe ser png, jpg o jpeg.";
            }elseif ($cover["size"] > 3000000) {
              $errors["cover"] = "La foto no debe superar los 3MB";
            }
    
          }else{
            $errors["cover"] = "Debe subir una imagen.";
          }

         return $errors;

    }

}
