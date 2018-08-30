<?php

namespace App\Infrastructure;

use App\Domain\Exception\UserNotFoundException;
use App\Domain\Model\User;
use App\Domain\Repository\UserRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class UserRepositoryDoctrine extends EntityRepository implements UserRepositoryInterface
{

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, $entityManager->getClassMetadata(User::class));
    }

    public function save(User $user)
    {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    public function findByUserId(string $id): User
    {
        $user = $this->find($id);
        if ($user === NULL) {
            throw new UserNotFoundException(sprintf('The User with ID "%s" does not exist.', $id));
        }
        return $user;
    }
}