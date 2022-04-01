<?php

namespace Mvc\Model;

use PDO;

class Post
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=database;dbname=instawish;charset=UTF8', "root", "tiger", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_FOUND_ROWS => true
            ]
        );
    }

    public function findAll()
    {
        $statement = $this->pdo->prepare('SELECT * FROM post WHERE 1');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findOneById(int $id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM post WHERE id = :id');
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

    public function findWhereTitleLike(string $title)
    {
        $statement = $this->pdo->prepare('SELECT * FROM post WHERE title LIKE :title');
        $statement->execute([
            'title' => $title . '%'
        ]);

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(string $title, string $imageName)
    {
        $statement = $this->pdo->prepare('INSERT INTO `post`(`title`, `image_name`) VALUES (:title, :image_name)');

        $statement->execute([
            'title' => $title,
            'image_name' => $imageName
        ]);
    }
}