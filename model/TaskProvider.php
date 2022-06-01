<?php

class TaskProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function getUndoneList(): array
    {
        $statement = $this->pdo->prepare(
            'SELECT id, description, isDone FROM tasks WHERE isDone != 1'
        );

        $statement->execute();

        $result = [];

        foreach ($statement as $task) {
            $newTask = new Task(
                $task['description'],
                $task['isDone']
            );
            $newTask->setId($task['id']);

            $result[] = $newTask;
        }

        return $result;

    }

    public function addTask(Task $task): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (description, isDone) VALUES (:description, :isDone)'
        );

        return $statement->execute([
            'description' => $task->getDescription(),
            'isDone' => $task->getIsDone()
        ]);
    }
}