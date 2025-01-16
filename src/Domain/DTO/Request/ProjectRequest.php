<?php

namespace App\Domain\DTO\Request;

class ProjectRequest
{
    private string $title;
    private string $category;
    private string $description;

    /**
     * @param string $title
     * @param string $category
     * @param string $description
     */
    public function __construct(string $title, string $category, string $description)
    {
        $this->title = $title;
        $this->category = $category;
        $this->description = $description;
    }


    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}