<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/e-commerce-DH/';

//modelos
require_once $path . "php/helpers.php";
require_once $path . "classes/Database.php";
require_once $path . "classes/User.php";
require_once $path . "classes/Customer.php";
require_once $path . "classes/Book.php";
require_once $path . "classes/Category.php";

require_once $path . "classes/Validator.php";
require_once $path . "classes/Authenticator.php";
require_once $path . "classes/UploadFile.php";

//controladores
require_once $path . "controllers/CustomerController.php";
require_once $path . "controllers/BookController.php";
require_once $path . "controllers/CategoryController.php";


$validator = new Validator();
Authenticator::initSession();
