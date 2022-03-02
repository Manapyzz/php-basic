<?php

namespace Mvc\Model;

use PDO;

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

    public function findOneById(int $id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM book WHERE id = :id');
        $statement->execute([
            'id' => $id
        ]);

        $book = $statement->fetch(PDO::FETCH_ASSOC);

        if (!empty($book))
        {
            return $book;
        }

        return null;
    }

    public function updateBook(int $id, string $title, string $description)
    {
        $statement = $this->pdo->prepare('UPDATE `book` SET title = :title, description = :description WHERE id = :id');

        $statement->execute([
            'id' => $id,
            'title' => $title,
            'description' => $description
        ]);
    }

    public function deleteOneById(int $id)
    {
        $statement = $this->pdo->prepare('DELETE FROM book WHERE id = :id');
        $statement->execute([
            'id' => $id
        ]);
    }

    public function createBook(string $title, string $author, string $description)
    {
        $statement = $this->pdo->prepare('INSERT INTO `book`(`title`, `author`, `description`) VALUES (:title, :author, :description)');

        $statement->execute([
            'title' => $title,
            'author' => $author,
            'description' => $description
        ]);
    }
}