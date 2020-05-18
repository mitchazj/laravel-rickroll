<?php

namespace mitchazj\LaravelRickroll\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelRickroll extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LaravelRickroll';
    }
}
