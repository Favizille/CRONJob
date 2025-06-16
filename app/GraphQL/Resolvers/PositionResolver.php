<?php
namespace App\GraphQL\Resolvers;

use App\Facades\PositionFacade;


class PositionResolver
{
    public function createPosition($_, array $args)
    {
        return PositionFacade::create($args['input']);
    }
}
