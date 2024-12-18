<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Xác thực thông tin người dùng
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response()->json(['message' => 'Invalid login credentials.'], 401);
        }

        $user = Auth::user();

        // Tạo token
        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);
    }

    public function getUser(Request $request)
    {
        if (Auth::check()) {
            // Người dùng đã đăng nhập
            $user = Auth::user();
            return response()->json($user);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }
}
