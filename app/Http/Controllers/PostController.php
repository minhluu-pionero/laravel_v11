<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PostController
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();

            return response()->json([
                'title' => 'My first post',
                'content' => 'This is my first post.',
                'user' => $user,
            ]);
        }

        return response()->json([
            'title' => 'My first post 123',
        ]);
    }
}
