<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class PositionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'position-service';
    }

    public static function expireStale(){
        return app('position-service')->expireStale();
    }
}