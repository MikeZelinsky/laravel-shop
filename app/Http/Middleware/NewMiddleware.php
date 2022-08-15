<?php

namespace App\Http\Middleware;

use App\Http\Requests\ClientRequest;
use Closure;
use Illuminate\Http\Request;

class NewMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\ClientRequest  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->car_id == 1)
        {
            return redirect('main');
        }
        return $next($request);
    }
}
