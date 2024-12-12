<?php

namespace App\Enums;

enum UserRoleEnum: string
{
    case Admin = 'admin';
    case User = 'user';
    case Contributor = 'contributor';

    public static function getRoles(): array
    {
        return [
            self::Admin->value,
            self::User->value,
            self::Contributor->value,
        ];
    }
}
