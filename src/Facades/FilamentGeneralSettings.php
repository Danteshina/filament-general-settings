<?php

namespace Danteshina\FilamentGeneralSettings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Danteshina\FilamentGeneralSettings\FilamentGeneralSettings
 */
class FilamentGeneralSettings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Danteshina\FilamentGeneralSettings\FilamentGeneralSettings::class;
    }
}
