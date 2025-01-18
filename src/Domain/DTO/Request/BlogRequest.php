<?php

namespace App\Domain\DTO\Request;

class BlogRequest
{
    private string $title;
    private string $slug;
    private string $category;
    private string $content;

    /**
     * @param string $title
     * @param string $slug
     * @param string $category
     * @param string $content
     */
    public function __construct(string $title, string $slug, string $category, string $content)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->category = $category;
        $this->content = $content;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}