<?php

namespace Picklewagon\RequestLogger\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequest
{
    public function handle($request, Closure $next)
    {
        Log::info('LogRequest#handle', [
            'method' => $_SERVER['REQUEST_METHOD'],
            'request' => $request->all(),
            'request_uri' => $_SERVER['REQUEST_URI'],
        ]);
        return $next($request);
    }

    public function terminate($request, $response)
    {
        Log::info('LogRequest#terminate', [
            'method' => $_SERVER['REQUEST_METHOD'],
            'request' => $request->all(),
            'response' => $response,
            'request_uri' => $_SERVER['REQUEST_URI'],
        ]);
    }
}
