<?php

abstract class User
{

    protected $id;
    protected $name;
    protected $surname;
    protected $email;
    protected $password;
    protected $rePassword;

    public function __construct(string $email, string $password, string $rePassword = '', string $name = '', string $surname = '', int $rol = 2, int $id = 0)
    {

        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->rePassword = $rePassword;
        $this->rol = $rol; // Los roles designados son 1 para Admin y 2 para clientes
        $this->id = $id;

    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function setRePassword(string $rePassword)
    {
        $this->rePassword = $rePassword;
    }

    public function setRol(string $rol)
    {
        $this->rol = $rol;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRePassword()
    {
        return $this->rePassword;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}
