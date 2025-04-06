<?php

namespace App\Logics;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginLogic
{
    protected $errorCode = 'toDo.loginUser';

    public function run(array $input)
    {
        $auth = $this->login($input);

        if (! $auth) {
            return false;
        }

        return $auth;
    }

    public function login($input)
    {
        $credentials = [
            'email' => $input['email'],
            'password' => $input['password']
        ];

        if (!Auth::attempt($credentials)) {
            return [
                'message' => 'Incorrect Credentials'
            ];
        }

        $user = User::where('email', $input['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'token' => $token,
            'user' => $user
        ];
    }
}
