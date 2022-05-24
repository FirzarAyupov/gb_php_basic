<?php

class User
{
    private string $username;
    private string $email;
    private ?string $sex;
    private ?int $age;
    private bool $isActive = true;
    private DateTime $dateCreated;


    public function __construct(string $username)
    {
        $this->username = $username;
    }


    public function setAge(?int $age): void
    {
        if ($age == null) {
            $this->age = null;
        } elseif ($age > 0 && $age <= 125) {
            $this->age = $age;
        }
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
