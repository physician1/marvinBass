<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckActivePlan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $plans = auth()->user()->userPlans()->where('expires_at', '>=', now())->count();

        return $plans ? $next($request) : response()->view('', [], Response::HTTP_FORBIDDEN);

    }
}
