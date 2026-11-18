<?php

class Book
{
    private int $id;
    private string $title;
    private string $author;
    private string $publishedDate;
    private string $addedDate;
    private string $readingStatus;

    public function __construct(int $id, string $title, string $author, string $publishedDate, string $addedDate, string $readingStatus)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->publishedDate = $publishedDate;
        $this->addedDate = $addedDate;
        $this->readingStatus = $readingStatus;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setAuthor(string $author): void {
        $this->author = $author;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function setPublishedDate(string $publishedDate): void {
        $this->publishedDate = $publishedDate;
    }

    public function getPublishedDate(): string {
        return $this->publishedDate;
    }

    public function setAddedDate(string $addedDate): void {
        $this->addedDate = $addedDate;
    }

    public function getAddedDate(): string {
        return $this->addedDate;
    }

    public function setReadingStatus(string $readingStatus): void {
        $this->readingStatus = $readingStatus;
    }

    public function getReadingStatus(): string {
        return $this->readingStatus;
    }
}