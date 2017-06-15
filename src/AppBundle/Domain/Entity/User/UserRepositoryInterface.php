<?php

namespace Domain\Entity\User;


interface UserRepositoryInterface
{
    public function find($id);
    public function save(User $user);
    public function delete(User $user);
}