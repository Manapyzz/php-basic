<?php

class Book
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=database;dbname=bookstore;charset=UTF8', "root", "tiger", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_FOUND_ROWS => true
            ]
        );
    }

    public function findAll()
    {
        $statement = $this->pdo->prepare('SELECT * FROM book WHERE 1');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}