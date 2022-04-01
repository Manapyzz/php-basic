<?php

namespace Mvc\Controller;

use Config\Controller;
use Mvc\Model\Post;

class PostController extends Controller
{
    public function homepage()
    {
        $postModel = new Post();
        $posts = $postModel->findAll();

        echo $this->twig->render('post/homepage.html.twig', [
            'posts' => $posts
        ]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title']) && isset($_FILES['image']))
        {

            $from = $_FILES['image']['tmp_name'];
            $to = __DIR__ . '/../../public/images/' . $_FILES['image']['name'];

            if (move_uploaded_file($from, $to))
            {
                $postModel = new Post();
                $postModel->create($_POST['title'], $_FILES['image']['name']);
            }
        }

        header('Location: /');
        exit();
    }

    public function readOne(int $postId)
    {
        $postModel = new Post();
        $post = $postModel->findOneById($postId);

        if (empty($post))
        {
            header('Location: /');
            exit();
        }

        echo $this->twig->render('post/one.html.twig', [
            'post' => $post
        ]);
    }

    public function api()
    {
        $response = [
            'message' => 'This is a message from anonymous'
        ];

        $postModel = new Post();
        $posts = $postModel->findAll();

        header('Content-Type: application/json');

        echo json_encode($posts);
    }

    public function apiPost()
    {
        $json = file_get_contents('php://input');
        $userData = json_decode($json, true);

        header('Content-Type: application/json');
        echo json_encode($userData);
    }

    public function search()
    {
        $json = file_get_contents('php://input');
        $userData = json_decode($json, true);
        header('Content-Type: application/json');

        if (!isset($userData['search']))
        {
            http_response_code(400);
            echo json_encode([
                'status' => 400,
                'message' => 'You request is missing search parameter'
            ]);

            return;
        }

        $postModel = new Post();
        $posts = $postModel->findWhereTitleLike($userData['search']);

        echo json_encode([
            'status' => 200,
            'data' => $posts
        ]);
    }
}