<?php

namespace App\Domain\Repository;

use App\Domain\Model\User;

interface UserRepositoryInterface
{
    public function save(User $user);
    public function findAll();
    public function findByUserId(string $id): User;
}