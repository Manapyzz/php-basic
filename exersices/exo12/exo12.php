<?php

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


// Update a element with his id
//$statement = $pdo->prepare('UPDATE `article` SET `title`= :title WHERE id = :id');
//$statement->execute([
//   'title' => 'title updated from php',
//   'id' => 11
//]);

// Delete one element by his id
//$statement = $pdo->prepare('DELETE FROM `article` WHERE id = :id');
//$statement->execute([
//    'id' => 7
//]);

