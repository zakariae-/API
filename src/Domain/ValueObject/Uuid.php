<?php

namespace App\Domain\ValueObject;

use Assert\Assertion;

class Uuid
{
    /** @var uuid */
    private $uuid;

    /**
     * @throws \Assert\AssertionFailedException
     */
    public static function fromString(string $uuid): self
    {
        Assertion::uuid($uuid, 'Not a valid id');
        $instance = new self();
        $instance->uuid = $uuid;
        return $instance;
    }
    public function toString(): string
    {
        return $this->uuid;
    }
    public function __toString(): string
    {
        return $this->uuid;
    }
    private function __construct()
    {
    }
    
}