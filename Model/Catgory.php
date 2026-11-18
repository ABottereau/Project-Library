<?php

class Category 
{
    private int $id;
    private string $nameCategory;

    public function __construct(int $id, string $nameCategory)
    {
        $this->id = $id;
        $this->nameCategory = $nameCategory;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setNameCategory(string $nameCategory): void {
        $this->nameCategory = $nameCategory;
    }

    public function getNameCategory(): string {
        return $this->nameCategory;
    }
}