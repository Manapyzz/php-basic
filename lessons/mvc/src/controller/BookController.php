<?php

namespace Mvc\Controller;

use Config\Controller;
use Mvc\Model\Book;
use Twig\Environment;

class BookController extends Controller
{
    private Book $bookModel;

    public function __construct()
    {
        $this->bookModel = new Book();
        parent::__construct();
    }

    public function listBook()
    {
        $books = $this->bookModel->findAll();

        echo $this->twig->render('book/books.html.twig', [
            'books' => $books
        ]);
    }

    public function createBook()
    {
        $this->bookModel->createBook($_POST['title'], $_POST['author'], $_POST['description']);
        header('Location: /books');
        exit();
    }

    public function getBook(int $id)
    {
        $bookModel = new Book();
        $book = $this->bookModel->findOneById($id);

        if (empty($book))
        {
            header('Location: /books');
            exit();
        }

        echo $this->twig->render('book/book.html.twig', [
            'book' => $book
        ]);
    }

    public function updateBook(int $id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title']) && isset($_POST['description']))
        {
            $this->bookModel->updateBook($id, $_POST['title'], $_POST['description']);
            header(sprintf('Location: /books/%s', $id));
            exit();
        }

        $book = $this->bookModel->findOneById($id);

        if (empty($book))
        {
            header('Location: /books');
            exit();
        }

        echo $this->twig->render('book/edit-book.html.twig', [
            'book' => $book
        ]);
    }

    public function deleteBook(int $id)
    {
        $this->bookModel->deleteOneById($id);
        header('Location: /books');
        exit();
    }
}