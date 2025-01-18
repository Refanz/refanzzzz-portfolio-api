<?php

namespace App\Domain\Service;

use App\Domain\DTO\Request\ProjectRequest;
use App\Domain\Model\Project;
use App\Domain\Repository\ProjectRepository;
use Psr\Container\ContainerInterface;

class ProjectService
{
    private ContainerInterface $container;
    private ProjectRepository $projectRepository;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->projectRepository = $this->container->get(ProjectRepository::class);
    }

    public function addProject(ProjectRequest $request): Project
    {
        $project = new Project(
            $request->getTitle(),
            $request->getCategory(),
            $request->getDescription()
        );

        return $this->projectRepository->saveAndFlush($project);
    }
}