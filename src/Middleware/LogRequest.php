<?php

namespace Picklewagon\RequestLogger\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequest
{
    public function handle($request, Closure $next)
    {
        $data = $this->dataFromRequest($request);
        Log::info('LogRequest#handle', $data);

        return $next($request);
    }

    public function terminate($request, $response)
    {
        $data = array_merge(
            $this->dataFromRequest($request),
            $this->dataFromResponse($response)
        );
        Log::info('LogRequest#terminate', $data);
    }

    private function dataFromRequest($request)
    {
        return [
            'method' => $_SERVER['REQUEST_METHOD'],
            'request' => $request->all(),
            'request_uri' => $_SERVER['REQUEST_URI'],
        ];
    }

    private function dataFromResponse($response)
    {
        return [
            'response' => $response,
        ];
    }
}
