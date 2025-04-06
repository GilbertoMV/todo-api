<?php

namespace App\Http\Controllers;


use App\Logics\LoginLogic;
use App\Logics\LogoutLogic;
use App\Logics\RegisterLogic;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function register(
        RegisterRequest $request,
        RegisterLogic $logic
    ): JsonResponse {
        $input = $request->all();
        $result = $logic->run($input);

        return response()->json($result);
    }

    public function login(
        LoginRequest $request,
        LoginLogic $logic
    ): JsonResponse {
        $input = $request->all();
        $result = $logic->run($input);

        return response()->json($result);
    }

    public function logout(
        LogoutLogic $logic
    ): JsonResponse {
        $result = $logic->run();
        return response()->json($result);
    }
}
