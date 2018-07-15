<?php

namespace App\Application;


use App\Domain\Model\User;
use App\Domain\Repository\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser(string $userName, string $email, string $password): User
    {
        $user = new User($userName, $email, $password);
        $this->userRepository->save($user);

        return $user;
    }

    public function getAll(): array
    {
        return $this->userRepository->findAll();
    }

    public function getUserById(string $userId): ?User
    {
        return $this->userRepository->findByUserId($userId);
    }
}