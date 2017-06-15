<?php

namespace AppBundle\Domain\Entity\Post;

use Domain\Entity\User\User;

class Post
{
    /** @var  integer $id */
    protected $id;
    /** @var  User $author */
    protected $author;
    /** @var  string $title */
    protected $title;
    /** @var  string $body */
    protected $body;

    /**
     * @return int
     */
    public function getId(): integer
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * @param User $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }



}