<?php

namespace App\Http\Controllers;

class AuthController
{
public function mobileLogin(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('mobile')->attempt($credentials)) {
        $user = Auth::guard('mobile')->user();

        $token = $user->createToken('API Token');

        return response()->json([
            'token' => $token->accessToken,
            'token_type' => 'bearer',
            'expires_in' => $token->expiresIn,
        ]);
    } else {
        return response()->json(['error' => 'invalid_credentials'], 401);
    }
}
}
