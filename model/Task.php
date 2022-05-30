<?php

class Task {
    private bool $isDone;
    private string $description;

    public function __construct(string $description, bool $isDone = false)
    {
        $this->description = $description;
        $this->isDone = $isDone;
    }

    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function markAsDone()
    {
        $this->isDone = true;
    }



}