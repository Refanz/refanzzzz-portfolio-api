<?php

namespace App\Domain\Repository;

use App\Domain\Model\Blog;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\ORMException;
use Exception;

class BlogRepository
{
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @throws Exception
     */
    public function saveAndFlush(Blog $blog): Blog
    {
        try {
            $this->entityManager->persist($blog);
            $this->entityManager->flush();

            return $blog;
        } catch (ORMException $e) {
            throw new Exception($e->getMessage());
        }
    }
}