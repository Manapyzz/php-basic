<?php

class User
{
    public string $lastname;
    public string $firstname;
    public string $email;
    public int $age;

    public function __construct(string $lastname, string $firstname, string $email, int $age)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->age = $age;
    }

    public function isOldEnough(): bool
    {
        return $this->age >= 18;
    }
}