<?php

namespace App\Domain\Repository;

use App\Domain\Model\Project;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\ORMException;
use Exception;

class ProjectRepository
{
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @throws Exception
     */
    public function saveAndFlush(Project $project): Project
    {
        try {
            $this->entityManager->persist($project);
            $this->entityManager->flush();

            return $project;
        } catch (ORMException $e) {
            throw new Exception($e->getMessage());
        }
    }
}
