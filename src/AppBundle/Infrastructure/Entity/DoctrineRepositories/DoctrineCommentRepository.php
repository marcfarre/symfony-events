<?php

namespace AppBundle\Infrastructure\Entity\DoctrineRepositories;


use AppBundle\Domain\Entity\Comment\Comment;
use AppBundle\Domain\Entity\Comment\CommentRepositoryInterface;
use Doctrine\ORM\EntityRepository;

class DoctrineCommentRepository extends EntityRepository implements CommentRepositoryInterface
{
    public function save(Comment $comment)
    {
        $this->getEntityManager()->persist($comment);
        $this->getEntityManager()->flush();
    }

    public function find($id)
    {
        $this->find($id);
    }
    public function delete(Comment $comment)
    {
        $this->delete($comment);
    }


}