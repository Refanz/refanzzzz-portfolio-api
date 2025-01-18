<?php

namespace App\Domain\Model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use JsonSerializable;

#[Entity, Table(name: 'blogs')]
final class Blog implements JsonSerializable
{
    #[Id, Column(type: 'integer'), GeneratedValue(strategy: 'AUTO')]
    private int $id;

    #[Column(type: 'string', unique: true, nullable: false)]
    private string $slug;

    #[Column(type: 'string', nullable: false)]
    private string $title;

    #[Column(type: 'string', nullable: false)]
    private string $category;

    #[Column(type: 'string', nullable: false)]
    private string $content;

    public function __construct(string $title, string $category, string $content, string $slug)
    {
        $this->title = $title;
        $this->category = $category;
        $this->content = $content;
        $this->slug = $slug;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'category' => $this->category,
            'content' => $this->content
        ];
    }
}
