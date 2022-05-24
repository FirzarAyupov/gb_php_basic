<?php

require_once "User.php";

class Task
{
    private string $description;
    private DateTime $dateCreated;
    private ?DateTime $dateUpdate;
    private ?DateTime $dateDone;
    private int $priority;
    private bool $isDone;
    private User $user;
    private array $comments = [];

    public function __construct(string $description, int $priority, User $user)
    {
        $this->description = $description;
        $this->priority = $priority;
        $this->dateUpdate = null;
        $this->dateDone = null;
        $this->isDone = false;
        $this->user = $user;
        $this->setDateCreated();
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->setDateCreated();
    }

    public function getDateCreated(): string
    {
        return $this->dateCreated->format('Y-m-d H:i:s');
    }

    private function setDateCreated(): void
    {
        $this->dateCreated = new DateTime();
    }

    public function getDateUpdate(): ?string
    {
        return ($this->dateUpdate) ? $this->dateUpdate->format('Y-m-d H:i:s') : null;
    }

    private function setDateUpdate(): void
    {
        $this->dateUpdate = new DateTime();
    }

    public function getDateDone(): ?string
    {
        return ($this->dateDone) ? $this->dateDone->format('Y-m-d H:i:s') : null;
    }

    private function setDateDone(DateTime $dateDone): void
    {
        $this->dateDone = $dateDone;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function addComments(Comment $comment): void
    {
        $this->comments[] = [$comment->getAuthor() => $comment];
    }

    public function isDone(): bool
    {
        return $this->isDone;
    }

    public function markAsDone()
    {
        $this->isDone = true;
        $this->setDateUpdate();
        $this->setDateDone(new DateTime());
    }

}
