<?php

namespace Picklewagon\RequestLogger\Http\Middleware;

use Closure;

class LogRequest
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {

    }
}
