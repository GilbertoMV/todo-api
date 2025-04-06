<?php

namespace App\Http\Controllers;

use App\Logics\IndexUsersLogic;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index(
        IndexUsersLogic $logic
    ): JsonResponse {
        $result = $logic->run();

        return response()->json($result);
    }
}
