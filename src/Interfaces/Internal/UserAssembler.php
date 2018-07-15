<?php

namespace App\Interfaces\Internal;

use App\Domain\Model\User;
use App\Interfaces\Dto\UserDto;

abstract class UserAssembler
{
    public static function getUserDto(User $user): UserDto
    {
        $userDto = new UserDto();
        $userDto->setId($user->getId());
        $userDto->setUsername($user->getUsername());
        $userDto->setEmail($user->getEmail());

        return $userDto;
    }
    public static function getUserDtoAsList(array $users): array
    {
        $userDtoList = [];
        foreach ($users as $user) {
            array_push($userDtoList, UserAssembler::getUserDto($user));
        }
        return $userDtoList;
    }

}