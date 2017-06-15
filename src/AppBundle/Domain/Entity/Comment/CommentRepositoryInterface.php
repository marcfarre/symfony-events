<?php

namespace AppBundle\Domain\Entity\Comment;

interface CommentRepositoryInterface
{
    public function find($id);
    public function save(Comment $comment);
    public function delete(Comment $comment);
}