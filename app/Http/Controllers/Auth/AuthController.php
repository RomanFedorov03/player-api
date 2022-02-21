<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    /**
     * @param RegisterRequest $request
     * @return array
     */
    public function register(RegisterRequest $request): array
    {
        if (isset($request['avatar'])) {
            Storage::put("avatars", $request['avatar']);
        }

        $user = User::create([
            'name' => $request['name'],
            'login' => $request['login'],
            'password' => Hash::make($request['password']),
            'avatar' => isset($request['avatar']) ? $request['avatar']->hashName() : null,
        ]);
        $user->tokens()->delete();
        Auth::login($user, true);

        return [
            'token' => $user->createToken('token-name', ['server:update'])->plainTextToken,
            'user' => Auth::user(),
        ];
    }

    /**
     * @param LoginRequest $request
     * @return array|JsonResponse
     */
    public function login(LoginRequest $request)
    {
        Auth::logout();
        $credentials = $request->only('login', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user->tokens()->delete();

            return [
                'token' => $user->createToken('token-name', ['server:update'])->plainTextToken,
                'user' => $user,
            ];
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Неверный логин или пароль.'
            ], 403);
        }
    }
}
