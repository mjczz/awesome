<?php

namespace mjczz\Awesome\Facades;

use Illuminate\Support\Facades\Facade;

class Awesome extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'awesome';
    }
}
