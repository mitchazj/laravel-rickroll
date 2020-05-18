<?php

namespace mitchazj\laravel-rickroll\Facades;

use Illuminate\Support\Facades\Facade;

class laravel-rickroll extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-rickroll';
    }
}
