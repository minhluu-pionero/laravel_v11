<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Gate;

class PostController
{
    public function index()
    {
        if (!Gate::allows('view')) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

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
