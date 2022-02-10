<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $fileds = $request->validate([

            "name" => "required|string",
            "email" => "required|string|unique:users,email",
            "password" => "required|string|confirmed",
            "role" => "required|integer",
        ]);

        $user = User::create([
            "name" => $fileds['name'],
            "email" => $fileds['email'],
            "password" => bcrypt($fileds['password']),
            "role" => $fileds['role']
        ]);
        $token = $user->createToken($request->userAgent(),[$fileds['role']])->plainTextToken;

        $response =[
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);

    }

    public function login(){

    }

    public function logout(){

    }
}
