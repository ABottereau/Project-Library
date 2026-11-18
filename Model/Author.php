<?php

class Author
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private int $nbBook;

    public function __construct(int $id, string $firstName, string $lastName, int $nbBook)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->nbBook = $nbBook;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function setNbBook(int $nbBook): void {
        $this->nbBook = $nbBook;
    }

    public function getNbBook(): int {
        return $this->nbBook;
    }
}