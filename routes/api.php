<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);

Route::get('users', function () {
    return response()->json(User::all());
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('posts', [PostController::class, 'index']);

    // Route::put('posts/{post}', [PostController::class, 'update'])
    //     ->middleware('can:update,post');

    // Route::put('posts/{post}', [PostController::class, 'update'])
    //     ->can('update', Post::class);


    Route::get('me', [AuthController::class, 'getUser']);
});
