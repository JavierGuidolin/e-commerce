<?php

class Customer extends User
{

    // Propiedades en suspenso hasta definir las clases correspondientes...
    //private $addresses;
    //private $cart;
    //private $orders;

    public function __construct(string $email, string $password, string $rePassword = '', string $name = '', string $surname = '', int $rol = 2, int $id = 0)
    {
        parent::__construct($email, $password, $rePassword, $name, $surname, $rol, $id);
        //$this->addresses = [];
        //$this->orders = [];
    }

    /* public function getAddresses()
    {
        return $this->addresses;
    }

    public function setAddresses(Address $address){
    $this->addresses[] = $address;
    }

    public function getCart()
    {
        return $this->cart;
    }

    public function setCart(Cart $cart){
    $this->cart = $cart;
    }

    public function getOrders()
    {
        return $this->orders;
    }

    public function setOrders($orders)
    {
        $this->orders = $orders;
    } */

}

