<?php

class Validator
{

    public function validateRegister(Customer $user, $update){

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



}
