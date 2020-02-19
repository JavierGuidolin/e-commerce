<?php

class Authenticator
{

    public static function initSession()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

}
