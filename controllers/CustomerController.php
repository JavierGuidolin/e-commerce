<?php

class CustomerController
{

    public static function saveCustomer(User $customer)
    {

        $conection = Database::connect();

        $query = $conection->prepare("INSERT INTO users(name, surname, email, password, rol) VALUES (:name, :surname, :email, :password, :rol)");

        $hashPassword = password_hash($customer->getPassword(), PASSWORD_DEFAULT);

        $query->bindValue(':name', $customer->getName());
        $query->bindValue(':surname', $customer->getSurname());
        $query->bindValue(':email', $customer->getEmail());
        $query->bindValue(':password', $hashPassword);
        $query->bindValue(':rol', $customer->getRol());

        $insertValue = $query->execute();

        return $insertValue;

    }

    public static function findByEmail(string $email)
    {

        $conection = Database::connect();

        $query = $conection->prepare("SELECT id, email, password, name, surname, rol FROM users WHERE email = :email");

        $query->bindValue(':email', $email);
        $query->execute();
        $data = $query->fetch(PDO::FETCH_ASSOC);

        //New customer
        if ($data) {
            $customer = new Customer($data['email'],
                $data['password'],
                "",
                $data['name'],
                $data['surname'],
                $data['rol'],
                $data['id']);

            return $customer;

        }

        return null;

    }

    public static function updateCustomer(User $customer){
    
        $conection = Database::connect();

        $query = $conection->prepare('UPDATE users SET name = :name, surname = :surname, password = :password WHERE id = :id');

        $hashPassword = password_hash($customer->getPassword(), PASSWORD_DEFAULT);

        $query->bindValue(':name', $customer->getName());
        $query->bindValue(':surname', $customer->getSurname());
        $query->bindValue(':password', $hashPassword);
        $query->bindValue(':id', $customer->getId());

        $insertValue = $query->execute();

        return $insertValue;

    }

}
