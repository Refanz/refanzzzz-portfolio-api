<?php

namespace App\Infrastructure\Controller;

use App\Domain\DTO\Request\BlogRequest;
use App\Domain\Model\Blog;
use App\Domain\Service\BlogService;
use App\Util\HttpStatusCode;
use App\Util\ResponseUtil;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class BlogController implements BaseController
{
    private ContainerInterface $container;
    private BlogService $blogService;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->blogService = $this->container->get(BlogService::class);
    }

    public function store(Request $request, Response $response): Response
    {
        $blogRequest = $request->getParsedBody();

        $blog = $this->blogService->addBlog(
            new BlogRequest(
                $blogRequest['title'] ?? '',
                $blogRequest['slug'] ?? '',
                $blogRequest['category'] ?? '',
                $blogRequest['content'] ?? ''
            )
        );

        $blogResponse = [
            'status' => HttpStatusCode::HTTP_CREATED,
            'message' => 'Successfully create new blog',
            'data' => $blog
        ];

        return ResponseUtil::createResponse($response, HttpStatusCode::HTTP_CREATED, $blogResponse);
    }

    public function index(Request $request, Response $response): Response
    {
        return $response;
    }

    public function get(int $id, Request $request, Response $response): Response
    {
        return $response;
    }

    public function update(int $id, Request $request, Response $response): Response
    {
        return $response;
    }

    public function delete(int $id, Request $request, Response $response): Response
    {
        return $response;
    }
}