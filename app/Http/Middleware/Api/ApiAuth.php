<?php

namespace App\Http\Middleware\Api;

use Closure;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class ApiAuth
{
    /**
     * @param $request
     * @param Closure $next
     * @return mixed
     * @throws Exception
     */
    public function handle($request, Closure $next)
    {
        $bearer = $request->bearerToken();
        if (is_null($bearer)) {
            return response()->json([
                'status' => 'error'
            ], 403);
        }
        $bearerToken = PersonalAccessToken::findToken($bearer);
        $expiration = config('sanctum.expiration');
        if (is_null($bearerToken)) {
            return response()->json([
                'status' => 'error'
            ], 403);
        } elseif (!is_null($expiration) && !$bearerToken->created_at->gt(now()->subMinutes($expiration))) {
            $bearerToken->delete();
            return response()->json([
                'status' => 'error',
            ], 403);
        }

        $user = $bearerToken->tokenable;
        $bearerToken->forceFill([
            'last_used_at' => now()
        ])->save();

        Auth::loginUsingId($user->id);
        $response = $next($request);
        if ($response instanceof JsonResponse) {
            $response->setContent(
                json_encode(
                    json_decode($response->getContent()),
                    JSON_UNESCAPED_SLASHES
                )
            );
        }
        return $response;
    }
}
