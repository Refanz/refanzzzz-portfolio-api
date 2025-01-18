<?php

namespace App\Domain\DTO\Response;

class ProjectResponse
{
    private string $id;
    private string $title;
    private string $category;
    private string $description;

    /**
     * @param string $id
     * @param string $title
     * @param string $category
     * @param string $description
     */
    public function __construct(string $id, string $title, string $category, string $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
        $this->description = $description;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
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