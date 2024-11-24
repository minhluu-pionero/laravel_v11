<?php

namespace App\Repositories;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function __construct()
    {
        echo 'UserRepository' . PHP_EOL;
    }

    public function getUser()
    {
        echo 'get user' . PHP_EOL;
    }
}
