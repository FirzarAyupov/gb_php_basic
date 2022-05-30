<?php

require_once "Task.php";

class TaskProvider {

    private array $taskList = [];

    //для добавления тестовых данных использовал конструктор
    public function __construct()
    {
        $this->taskList = [
            new Task('Погулять с собакой'),
            new Task('Вынести мусор' )
        ];
    }

    function getUndoneList()
    {
        return array_filter($this->taskList, function ($value) {
            return ($value->getIsDone() === false);
        });
    }

    function addTask(Task $task)
    {
        $this->taskList[] = $task;
    }
}