<?php

namespace AppBundle\Domain\Entity\Post;

interface PostRepositoryInterface
{
    public function find($id);
    public function save(Post $post);
    public function delete(Post $post);
}