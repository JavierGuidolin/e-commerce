<?php

class Authenticator
{

    public static function initSession()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public static function validatePass(string $passLog, string $passHash)
    {
        $passwordVerify = password_verify($passLog, $passHash);
        return $passwordVerify;
    }

    public static function setSession(Customer $user)
    {

        $_SESSION['email'] = $user->getEmail();
        $_SESSION['name'] = $user->getName();
        $_SESSION['surname'] = $user->getSurname();
        $_SESSION['rol'] = $user->getRol();

    }

    public static function setCookies(Customer $user)
    {

        setcookie('email', $user->getEmail(), time() + 3600, '/');
        setcookie('password', $user->getPassword(), time() + 3600, '/');

    }

    /*public static function validateUser()
    {

        if (isset($_SESSION["email"])) {
            return true;
        } elseif (isset($_COOKIE["email"])) {
            $_SESSION["email"] = $_COOKIE["email"];
            return true;
        } else {
            return false;
        }
    }
    */

}
