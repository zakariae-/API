<?php

namespace App\Application\Query\User\FindById;

use App\Application\Query\QueryHandlerInterface;
use App\Application\Query\User\FindById\FindByIdQuery;
use App\Domain\Repository\UserRepositoryInterface;

class FindByIdHandler implements QueryHandlerInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private $repository;

    public function __invoke(FindByIdQuery $query)
    {
        /** @var UserViewInterface $userView */
        $userView = $this->repository->findByUserId($query->id);
        return $userView;
    }

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}