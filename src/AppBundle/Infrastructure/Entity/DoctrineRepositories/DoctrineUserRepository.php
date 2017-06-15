<?php

namespace AppBundle\Infrastructure\Entity\DoctrineRepositories;

use Doctrine\ORM\EntityRepository;
use Domain\Entity\User\User;
use Domain\Entity\User\UserRepositoryInterface;

class DoctrineUserRepository extends EntityRepository implements UserRepositoryInterface
{
    public function save(User $user)
    {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    public function find($id)
    {
        $this->find($id);
    }
    public function delete(User $user)
    {
        $this->delete($user);
    }


}