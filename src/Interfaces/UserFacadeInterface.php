<?php

namespace App\Interfaces;

use App\Interfaces\Dto\UserDto;

interface UserFacadeInterface
{
    public function create(UserDto $data): UserDto;
    public function getAll(): array;
    public function getTicketById(String $id): UserDto;
}