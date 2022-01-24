<?php

class Author
{
    private string $firstname;
    private string $lastname;
    private array $books = [];

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getBooks(): array
    {
        return $this->books;
    }

    public function createBook(string $name, \DateTimeImmutable $releaseDate)
    {
        $book = new Book($name, $releaseDate, $this);
        $this->books[] = $book;
    }
}

class Book
{
    private string $name;
    private DateTimeImmutable $releaseDate;
    private Author $author;

    public function __construct(string $name, DateTimeImmutable $releaseDate, Author $author)
    {
        $this->name = $name;
        $this->releaseDate = $releaseDate;
        $this->author = $author;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }
}

$alex = new Author('Alex', 'Picard');
$rick = new Author('Rick', 'Sanchez');

$alex->createBook('Pipou of the world', new \DateTimeImmutable('2021-10-10'));
$alex->createBook('Hello of the world', new \DateTimeImmutable('2021-10-10'));


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p> Livre écrit par <?php echo $alex->getFirstname() . ' ' . $alex->getLastname(); ?> :</p>
    <ul>
        <?php foreach($alex->getBooks() as $book): ?>
            <li><?php echo $book->getName(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>


