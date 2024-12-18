<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Gate;

class PostController
{
    public function index()
    {
        $response = Gate::inspect('view-post');

        if ($response->allowed()) {
            // The action is authorized...
        } else {
            return response()->json(['message' => $response->message()], 403);
        }

        return response()->json([
            'title' => 'My first post 123',
        ]);
    }
}
