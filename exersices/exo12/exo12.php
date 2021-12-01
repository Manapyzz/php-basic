<?php

$dsn = 'mysql:host=database;dbname=blog;charset=UTF8';

try {
    $pdo = new PDO($dsn, "root", "tiger", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_FOUND_ROWS => true
        ]
    );

    if ($pdo) {
        echo "Connected to the database successfully!";
    }
} catch (PDOException $exception) {
    echo $exception->getMessage();
}


// Fetch all articles
//$statement = $pdo->prepare('SELECT * FROM article');
//$statement->execute();
//$articles = $statement->fetchAll(PDO::FETCH_ASSOC);

// Fetch one element by his id
//$userInput = 1;
//
//$statement = $pdo->prepare('SELECT * FROM `article` WHERE id = :id');
//$statement->execute([
//    'id' => $userInput
//]);
//$article = $statement->fetch(PDO::FETCH_ASSOC);


// Insert one element in database
//$query = "INSERT INTO `article`(`title`, `description`, `url`) VALUES (:title, :description,:url)";
//$statement = $pdo->prepare($query);
//$statement->execute([
//    'title' => 'A blog title',
//    'description' => 'this is my article description',
//    'url' => 'https://test.test'
//]);
//
//$lastArticleId = $pdo->lastInsertId();


