<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        if ($this->isAdmine($request)) {
            return $next($request);
        }

        abort(403);
    }

    protected function isAdmine(Request $request)
    {
//        return $request->user()->admin;
        return false;
    }
}
