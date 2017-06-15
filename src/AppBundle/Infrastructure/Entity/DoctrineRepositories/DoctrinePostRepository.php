<?php

namespace AppBundle\Infrastructure\Entity\DoctrineRepositories;


use AppBundle\Domain\Entity\Post\Post;
use AppBundle\Domain\Entity\Post\PostRepositoryInterface;
use Doctrine\ORM\EntityRepository;

class DoctrinePostRepository extends EntityRepository implements PostRepositoryInterface
{
    public function save(Post $post)
    {
        $this->getEntityManager()->persist($post);
        $this->getEntityManager()->flush();
    }

    public function find($id)
    {
        $this->find($id);
    }
    public function delete(Post $post)
    {
        $this->delete($post);
    }

    public function getLast10Posts()
    {
        $query = $this->createQueryBuilder('p')
            ->from('post', 'p')
            ->orderBy('date')
            ->setMaxResults(10)
            ->getQuery();
        return $query->execute();
    }
}