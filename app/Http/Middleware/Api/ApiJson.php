<?php

namespace App\Http\Middleware\Api;

use Closure;

class ApiJson
{
    /**
     * @param $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->headers->set('Accept','application/json');
        return $next($request);
    }
}
