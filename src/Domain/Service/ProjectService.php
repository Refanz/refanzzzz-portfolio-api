<?php

namespace App\Domain\Service;

use App\Domain\DTO\Request\ProjectRequest;
use App\Domain\Model\Project;
use App\Domain\Repository\ProjectRepository;
use Psr\Container\ContainerInterface;

class ProjectService
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function addProject(ProjectRequest $project): Project
    {
        $project = new Project(
            $project->getTitle(),
            $project->getCategory(),
            $project->getDescription()
        );

        $this->container->get(ProjectRepository::class)->saveAndFlush($project);

        return $project;
    }
}