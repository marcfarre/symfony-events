<?php

namespace AppBundle\Domain\Entity\Comment;


use AppBundle\Domain\Entity\Post\Post;
use Domain\Entity\User\User;
use Symfony\Component\Validator\Constraints\DateTime;

class Comment
{
    /** @var  integer $id */
    protected $id;
    /** @var  User $user */
    protected $user;
    /** @var  DateTime $date */
    protected $date;
    /** @var  Post $post */
    protected $post;
    /** @var  Comment $responseTo */
    protected $responseTo;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return Post
     */
    public function getPost(): Post
    {
        return $this->post;
    }

    /**
     * @param Post $post
     */
    public function setPost(Post $post)
    {
        $this->post = $post;
    }

    /**
     * @return Comment
     */
    public function getResponseTo(): Comment
    {
        return $this->responseTo;
    }

    /**
     * @param Comment $responseTo
     */
    public function setResponseTo(Comment $responseTo)
    {
        $this->responseTo = $responseTo;
    }


}