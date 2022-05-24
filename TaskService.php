<?php


class TaskService
{
    public static function addComment(User $user, Task $task, string $text)
    {
        $task->addComments(new Comment($user, $task, $text));
    }

}