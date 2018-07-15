<?php

namespace App\Interfaces;


use App\Application\UserServiceInterface;
use App\Interfaces\Dto\UserDto;
use App\Interfaces\Internal\UserAssembler;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as Configuration;

class UserFacade extends Controller implements UserFacadeInterface
{
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function create(UserDto $data): UserDto
    {
        $user = $this->userService->createUser($data->getUsername(), $data->getEmail(), $data->getPassword());

        return UserAssembler::getUserDto($user);
    }

    public function getAll(): array
    {
        $users = $this->userService->getAll();

        return UserAssembler::getUserDtoAsList($users);
    }

    public function getTicketById(String $id): UserDto
    {
        $user = $this->userService->getUserById($id);

        return UserAssembler::getUserDto($user);
    }
}