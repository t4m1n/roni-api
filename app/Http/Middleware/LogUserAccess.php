<?php

namespace App\Http\Middleware;

use App\Models\UserAccessLog;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LogUserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        UserAccessLog::create([
            'user_id'    => Auth::check() ? Auth::id() : null,
            // 'url'        => $request->fullUrl(),
            'url'        => '/' . ltrim($request->path(), '/'),
            'ip_address' => $request->ip(),
            'method'     => $request->method(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        return $response;
    }
}
