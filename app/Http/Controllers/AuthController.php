<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    // jwt login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if ( ! $token = JWTAuth::attempt($credentials)) {
            return response([
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ], 400);
        }
        return response(['status' => 'success'])
        ->header('Authorization', $token);
    }

    // jwt refresh token
    public function refresh()
    {
        return response([
            'status' => 'success'
        ]);
    }
}
