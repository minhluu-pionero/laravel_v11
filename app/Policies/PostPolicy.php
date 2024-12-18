<?php

namespace App\Policies;

use App\Enums\UserRoleEnum;
use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    public function view(User $user)
    {
        return $user->role !== UserRoleEnum::Admin->value;
    }

    public function update(User $user, Post $post)
    {
        return true;
    }

    public function delete(User $user, Post $post)
    {
        return true;
    }
}
