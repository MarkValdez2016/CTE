<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use\App\Models\User;

class UserController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'userLastName' => 'required|string',
            'userFirstName' => 'required|string',
            'userType' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'userLastName' => $fields['userLastName'],
            'userFirstName' => $fields['userFirstName'],
            'email' => $fields ['email'],
            'password' => bcrypt($fields['password']),
            'userType' => $fields['userType'],
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user'=> $user,
            'token'=> $token
        ];

        return response($response, 201);
    }
}
