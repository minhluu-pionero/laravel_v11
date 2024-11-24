<?php

namespace App\Services;

class DeviceService
{
    public function __construct()
    {
        echo 'DeviceService is created' . PHP_EOL;
    }

    public function getDeviceName()
    {
        echo 'iPhone 12 Pro Max' . PHP_EOL;
    }

    public static function getDeviceColor()
    {
        echo 'Pacific Blue' . PHP_EOL;
    }
}
