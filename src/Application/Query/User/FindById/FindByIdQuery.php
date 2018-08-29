<?php

namespace App\Application\Query\User\FindById;

class FindByIdQuery
{
    /**
     * @var Id
     */
    public $id;
    /**
     * @throws \Assert\AssertionFailedException
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
}