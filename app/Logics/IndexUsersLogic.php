<?php

namespace App\Logics;

use App\Models\User;

class IndexUsersLogic
{
    public function run()
    {
        $users = User::all();

        return $users;
    }
}
