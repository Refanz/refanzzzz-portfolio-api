<?php

namespace App\Domain\Repository;

use App\Domain\Model\Project;
use Doctrine\ORM\EntityManager;

class ProjectRepository
{
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function saveAndFlush(Project $project): void
    {
        $this->entityManager->persist($project);
        $this->entityManager->flush();
    }
}