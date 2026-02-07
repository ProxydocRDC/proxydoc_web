<?php

namespace App\Http\Middleware;

use App\Services\TrackingService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackPageVisit
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if ($request->isMethod('GET') && ! $request->ajax() && ! $request->wantsJson()) {
            TrackingService::recordVisit($request);
        }

        return $response;
    }
}
