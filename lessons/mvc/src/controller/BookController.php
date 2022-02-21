<?php

require_once __DIR__ . '/../model/Book.php';

class BookController
{
    public function listBook()
    {
        $bookModel = new Book();
        $books = $bookModel->findAll();

        $message = 'Salut à tous!';

        $tooMuch = false;

        if (count($books) > 5)
        {
            $tooMuch = true;
        }

        require_once __DIR__.'/../view/book/books.php';
    }

    public function readBook()
    {
        require_once __DIR__.'/../view/book/book.php';
    }
}

// id, firstname, lastname, email
// /users -> renvoyer tous les utilisateurs en base sur une page