<?php

namespace App\Interfaces;

use League\Tactician\CommandBus;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

abstract class QueryController
{
    /**
     * @var CommandBus
     */
    private $queryBus;
    /**
     * @var UrlGeneratorInterface
     */
    private $router;

    public function __construct(CommandBus $queryBus, UrlGeneratorInterface $router)
    {
        $this->queryBus = $queryBus;
        $this->router = $router;
    }

    protected function ask($query)
    {
        return $this->queryBus->handle($query);
    }
}