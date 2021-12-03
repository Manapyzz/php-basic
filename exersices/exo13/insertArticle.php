<?php

// Connexion a la base de donnée
$dsn = 'mysql:host=database;dbname=blog;charset=UTF8';

try {
    $pdo = new PDO($dsn, "root", "tiger", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_FOUND_ROWS => true
        ]
    );
} catch (PDOException $exception) {
    echo $exception->getMessage();
}
///////

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['url']))
{

    $query = "INSERT INTO `article`(`title`, `description`, `url`) VALUES (:title, :description,:url)";
    $statement = $pdo->prepare($query);
    $statement->execute([
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'url' => $_POST['url']
    ]);

    echo 'Votre article a bien été créé !';
}
