<?php

namespace NewBookingSystem\Model;

use Framework\Model;
use PDO;

class UserModel extends Model
{
    public function createUser(string $lastname, string $firstname, string $email, string $password)
    {
        $statement = $this->pdo->prepare('INSERT INTO `user`(`lastname`, `firstname`, `email`, `password`) VALUES (:lastname, :firstname, :email, :password)');
        $statement->execute([
            'lastname' => $lastname,
            'firstname' => $firstname,
            'email' => $email,
            'password' => $password
        ]);
    }

    public function findOneByEmail(string $email)
    {
        $statement = $this->pdo->prepare('SELECT * FROM user WHERE email = :email');
        $statement->execute([
            'email' => $email
        ]);

        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}