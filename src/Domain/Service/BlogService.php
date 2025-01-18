<?php

namespace App\Domain\Service;

use App\Domain\DTO\Request\BlogRequest;
use App\Domain\Model\Blog;
use App\Domain\Repository\BlogRepository;
use Psr\Container\ContainerInterface;

class BlogService
{
    private ContainerInterface $container;
    private BlogRepository $blogRepository;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->blogRepository = $this->container->get(BlogRepository::class);
    }

    public function addBlog(BlogRequest $request): Blog
    {
        $blog = new Blog(
            $request->getTitle(),
            $request->getCategory(),
            $request->getContent(),
            $request->getSlug()
        );

        return $this->blogRepository->saveAndFlush($blog);
    }
}