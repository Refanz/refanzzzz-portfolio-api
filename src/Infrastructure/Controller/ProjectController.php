<?php

namespace App\Infrastructure\Controller;

use App\Domain\DTO\Request\ProjectRequest;
use App\Domain\Service\ProjectService;
use App\Util\ResponseUtil;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ProjectController implements BaseController
{
    private ContainerInterface $container;
    private ProjectService $projectService;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->projectService = $container->get(ProjectService::class);
    }

    public function index(Request $request, Response $response): Response
    {
        return $response;
    }

    public function store(Request $request, Response $response): Response
    {
        $projectRequest = $request->getParsedBody();

        $project = $this->projectService->addProject(
            new ProjectRequest(
                $projectRequest["title"] ?? '',
                $projectRequest["category"] ?? '',
                $projectRequest["description"] ?? ''
            )
        );

        $projectResponse = [
            'status' => 201,
            'message' => 'Successfully add new project',
            'data' => $project
        ];

        return ResponseUtil::createResponse($response, 201, $projectResponse);
    }

    public function get(int $id, Request $request, Response $response): Response
    {
        return $response;
    }

    public function update(int $id, Request $request, Response $response): Response
    {
        return $response;
    }

    public function delete($id, Request $request, Response $response): Response
    {
        return $response;
    }
}