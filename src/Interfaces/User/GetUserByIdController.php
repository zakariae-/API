<?php

namespace App\Interfaces\User;

use App\Interfaces\QueryController;
use Symfony\Component\HttpFoundation\Request;
use Assert\Assertion;
use App\Interfaces\Internal\UserAssembler;
use App\Application\Query\User\FindById\FindByIdQuery;

class GetUserByIdController extends QueryController
{
    public function __invoke(Request $request)
    {
        $id = $request->get('id');

        Assertion::notNull($id, "id can\'t be null");

        $command = new FindByIdQuery($id);
        $user = $this->ask($command);

        return UserAssembler::getUserDto($user);
    }
}