<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void getDeviceName()
 */
class DeviceBind extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'device_bind';
    }
}
