<?php

require_once 'db.php';

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['url']))
{
    $query = "INSERT INTO `article`(`title`, `description`, `url`) VALUES (:title, :description,:url)";
    $statement = $pdo->prepare($query);
    $statement->execute([
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'url' => $_POST['url']
    ]);

    header('Location: articles.php');
}
