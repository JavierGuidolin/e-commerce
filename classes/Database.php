<?php

class Database
{

    public static function connect()
    {

        $host = "localhost";
        $db = "e-commerce";
        $user = "root";
        $pass = "";
        $port = 3306;

        $dsn = "mysql:host=$host;port=$port;dbname=$db";

        $conection = null;

        try {

            $conection = new PDO($dsn, $user, $pass);
            $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $e) {
            echo "Error en la conexion a la DB: " . $e->getmessage();
            return $conection;
        }

        return $conection;
    }

}
