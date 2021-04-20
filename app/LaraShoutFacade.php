<?php
namespace App\LaraShout;
use Illuminate\Support\Facades\Facade;

class LaraShoutFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larashout';
    }
}