<?php

class Task {
    private int $id;

    public function __construct(string $description = '', bool $isDone = false)
    {
        $this->description = $description;
        $this->isDone = $isDone;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
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