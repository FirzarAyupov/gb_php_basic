<?php

class TaskProvider
{

    private array $taskList;

    public function __construct()
    {
        $this->taskList = $_SESSION['tasks'] ?? [];
    }

    function getUndoneList(): array
    {
        if (isset($this->taskList)) {
            return array_filter($this->taskList, function ($value) {
                return ($value->getIsDone() === false);
            });
        } else {
            return [];
        }
    }

    public function addTask(Task $task): void
    {
        $_SESSION['tasks'][] = $task;
        $this->taskList[] = $task;
    }
}