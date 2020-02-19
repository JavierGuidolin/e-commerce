<?php

function persistence($errors, $campo)
{

    if ($_POST) {
        if (empty($errores[$campo])) {
            return $_POST[$campo];
        } else {
            return "";
        }
    }

}

function notErrors()
{

    return $errors = [
        "name" => "",
        "surname" => "",
        "email" => "",
        "password" => "",
        "rePassword" => "",
    ];

}

function privateRoute(string $route)
{
    if (isset($_SESSION['email'])) {
        header("Location: $route");
    }
}
