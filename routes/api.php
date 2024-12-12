<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('posts', [PostController::class, 'index']);
Route::post('login', [AuthController::class, 'login']);

Route::get('users', function () {
    return response()->json(User::all());
});

Route::get('me', [AuthController::class, 'getUser'])->middleware(['auth:sanctum', 'abilities:check-status,place-orders']);
