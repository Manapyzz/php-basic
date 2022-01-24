<?php

require_once 'Book.php';

$dsn = 'mysql:host=database;dbname=poo_book;charset=UTF8';

try {
    $pdo = new PDO($dsn, "root", "tiger", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_FOUND_ROWS => true
        ]
    );
} catch (PDOException $exception) {
    echo $exception->getMessage();
}

function createBook($pdo, Book $book)
{
    $query = "INSERT INTO `book`(`name`, `releaseDate`, `author`) VALUES (:name, :releaseDate,:author)";
    $statement = $pdo->prepare($query);
    $statement->execute([
        'name' => $book->name,
        'releaseDate' => $book->releaseDate->format('Y-m-d'),
        'author' => $book->author
    ]);
}

function readBook($pdo, int $id): ?Book
{
    $query = 'SELECT * FROM book WHERE id = :id';
    $statement = $pdo->prepare($query);
    $statement->execute([
        'id' => $id
    ]);

    $book = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$book)
    {
        return null;
    }

    $newBook = new Book($book['name'], new \DateTimeImmutable($book['releaseDate']), $book['author']);
    $newBook->id = $book['id'];

    return $newBook;
}

function getAllBooks($pdo): array
{
    $query = 'SELECT * FROM book WHERE 1';
    $statement = $pdo->prepare($query);
    $statement->execute();

    $books = $statement->fetchAll(PDO::FETCH_ASSOC);

    $booksObject = [];

    foreach ($books as $book)
    {
        $newBook = new Book($book['name'], new \DateTimeImmutable($book['releaseDate']), $book['author']);
        $newBook->id = $book['id'];
        $booksObject[] = $newBook;
    }

    return $booksObject;
}

function updateBook($pdo, Book $book)
{
    if ($book->id === null)
    {
        throw new Exception('Cannot update book with no id.');
    }

    $statement = $pdo->prepare('UPDATE `book` SET `name`= :name, `releaseDate`= :releaseDate, `author`= :author WHERE id = :id');
    $statement->execute([
        'name' => $book->name,
        'releaseDate' => $book->releaseDate->format('Y-m-d'),
        'author' => $book->author,
        'id' => $book->id
    ]);
}

function deleteBook($pdo, int $id)
{
    $statement = $pdo->prepare('DELETE FROM book WHERE id = :id');
    $statement->execute([
        'id' => $id
    ]);
}

//$newBook = new Book('Hello World', new \DateTimeImmutable('2021-10-10'), 'Alex');
//createBook($pdo, $newBook);
//$bookFromDb = readBook($pdo, 2);
//getAllBooks($pdo);

//$bookInDb = readBook($pdo, 2);
//$bookInDb->name = 'I am a object';
//
//
//
//updateBook($pdo, $bookInDb);

deleteBook($pdo, 2);


