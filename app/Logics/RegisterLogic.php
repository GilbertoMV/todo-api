<?php

namespace App\Logics;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterLogic
{
    protected $errorCode = 'toDo.registerUser';

    public function run(array $input)
    {
        $userData = $this->registerUser($input);
        if (! $userData) {
            return false;
        }
        return $userData;
    }

    public function registerUser(array $input)
    {
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);

        return [
            'data' => $user
        ];
    }
}
