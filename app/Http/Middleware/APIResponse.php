<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class APIResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $original = $response->getOriginalContent();
        $statusCode = $response->getStatusCode();

        $content = [
            'status' => $statusCode,
            'success' => $response->isSuccessful(),
            'message' => array_get(Response::$statusTexts, $statusCode, ''),
            'data' => array_get($original, 'data', $original),
        ];

        if ($response instanceof Response) {
            $response->setContent($content);
        }

        if ($response instanceof JsonResponse) {
            $response->setData($content);
        }

        return $response;
    }
}
