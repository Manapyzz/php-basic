<?php

namespace Mvc\Model;

use Framework\Model;

use PDO;

class TaskModel extends Model
{
    public function findAll()
    {
        $statement = $this->pdo->prepare('SELECT * FROM task WHERE 1');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findOneById(int $id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM task WHERE id = :id');
        $statement->execute([
            'id' => $id
        ]);

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function create(string $name)
    {
        $today = new \Datetime();

        $statement = $this->pdo->prepare('INSERT INTO `task`(`name`, `done`, `created_at` ) VALUES (:name, :done, :created_at)');

        return $statement->execute([
            'name' => $name,
            'done' => 0,
            'created_at' => $today->format('Y-m-d H:i:s'),
        ]);
    }

    public function update(string $name, bool $done, int $id)
    {
        $statement = $this->pdo->prepare('UPDATE `task` SET name = :name, done = :done WHERE id = :id');

        return $statement->execute([
            'name' => $name,
            'done' => $done === true ? 1 : 0,
            'id' => $id,
        ]);
    }

    public function delete(int $id)
    {
        $statement = $this->pdo->prepare('DELETE FROM task WHERE id = :id');
        return $statement->execute([
            'id' => $id,
        ]);
    }
}