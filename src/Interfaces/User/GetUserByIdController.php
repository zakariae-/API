<?php

namespace App\Interfaces\User;

use App\Interfaces\QueryController;
use Symfony\Component\HttpFoundation\Request;
use App\Interfaces\Internal\UserAssembler;
use App\Application\Query\User\FindById\FindByIdQuery;

class GetUserByIdController extends QueryController
{
    public function __invoke(Request $request)
    {
        $id = $request->get('id');

        $command = new FindByIdQuery($id);
        $user = $this->ask($command);

        return UserAssembler::getUserDto($user);
    }
}