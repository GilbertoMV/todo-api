<?php

namespace App\Logics;

class LogoutLogic
{
    public function run()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Goodbye...'
        ];
    }
}
