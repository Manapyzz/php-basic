<?php

namespace Mvc\Controller;

use Framework\Controller;
use Mvc\Model\TaskModel;

class TodoController extends Controller
{
    private TaskModel $taskModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }

    public function list()
    {
        $this->sendReponse(200, $this->taskModel->findAll());
    }

    public function read(int $id)
    {
        header('Content-Type: application/json');

        $task =  $this->taskModel->findOneById($id);

        if (!$task)
        {
            http_response_code(404);
            return;
        }

        echo json_encode([
            'status' => 200,
            'data' => $task
        ]);
    }

    public function create()
    {
        $json = file_get_contents('php://input');
        $userData = json_decode($json, true);

        $isTaskCreated = $this->taskModel->create($userData['name']);

        $status = 200;
        $message = 'An error occured while creating the task';

        if ($isTaskCreated)
        {
            http_response_code(201);
            $status = 201;
            $message = 'Task has been created';
        }

        echo json_encode([
            'status' => $status,
            'data' => [],
            'message' => $message
        ]);
    }

    public function update(int $id)
    {
        $json = file_get_contents('php://input');
        $userData = json_decode($json, true);

        $isTaskUpdated = $this->taskModel->update($userData['name'],$userData['done'], $id);

        $message = $isTaskUpdated === true ? 'Task has been updated' : 'An error occured while updating the task';

        echo json_encode([
            'status' => 200,
            'data' => [],
            'message' => $message
        ]);
    }

    public function delete(int $id)
    {
        $this->taskModel->delete($id);

        http_response_code(204);
        echo json_encode([
            'status' => 204,
            'data' => [],
        ]);
    }

    private function sendReponse(int $status, array $data = [], ?string $message = null)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: http://127.0.0.1:5500');

        http_response_code($status);

        echo json_encode([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
    }
}