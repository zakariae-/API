<?php

namespace App\Application\Query\User\FindById;

use App\Domain\ValueObject\Uuid;

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
        $this->id = Uuid::fromString($id);
    }
}