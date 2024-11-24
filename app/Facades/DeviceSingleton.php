<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void getDeviceName()
 */
class DeviceSingleton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'device_singleton';
    }
}
