<?php

namespace App\Infrastructure\Controller;

use App\Domain\DTO\Request\ProjectRequest;
use App\Domain\Service\ProjectService;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ProjectController
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function index(Request $request, Response $response): Response
    {
        return $response;
    }

    public function store(Request $request, Response $response): Response
    {
        $projectRequest = $request->getParsedBody();

        $project = $this->container->get(ProjectService::class)->addProject(
            new ProjectRequest(
                $projectRequest["title"] ?? '',
                $projectRequest["category"] ?? '',
                $projectRequest["description"] ?? ''
            )
        );

//        $response->getBody()->write($project);

        return $response
            ->withHeader('Content-type', 'application/json')
            ->withStatus(201);
    }
}