<?php

namespace App\Application;

use App\Domain\Model\User;

interface UserServiceInterface
{
    public function createUser(string $userName, string $email, string $password): User;
    public function getAll(): array;
    public function getUserById(string $userId): ?User;
}