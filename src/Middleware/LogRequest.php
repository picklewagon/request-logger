<?php

namespace Picklewagon\RequestLogger\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequest
{
    public function handle($request, Closure $next)
    {
        Log::info('LogRequest#handle', [
            'request' => $request->all(),
        ]);
        return $next($request);
    }

    public function terminate($request, $response)
    {
        Log::info('LogRequest#terminate', [
            'request' => $request->all(),
            'response' => $response
        ]);
    }
}
