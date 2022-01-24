<?php

class Book
{
    public ?int $id = null;
    public string $name;
    public DateTimeImmutable $releaseDate;
    public string $author;

    public function __construct(string $name, DateTimeImmutable $releaseDate, string $author)
    {
        $this->name = $name;
        $this->releaseDate = $releaseDate;
        $this->author = $author;
    }
}