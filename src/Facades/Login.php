<?php

namespace Runthis\Login\Facades;

use Illuminate\Support\Facades\Facade;

class Login extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'login';
    }
}
