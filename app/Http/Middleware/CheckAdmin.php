<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user() && auth()->user()->role === 'operator') {
            return $next($request);
        }

        return redirect('/')->with('error', 'You do not have admin access.');
    }
}
