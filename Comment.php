<?php


class Comment
{
    private User $author;
    private Task $task;
    private string $text;

    public function __construct(User $author, Task $task, string $text)
    {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }


    public function getAuthor(): string
    {
        return $this->author->getUsername();
    }

    public function setAuthor(User $author): void
    {
        $this->author = $author;
    }

    public function getTask(): Task
    {
        return $this->task;
    }

    public function setTask(Task $task): void
    {
        $this->task = $task;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }


}