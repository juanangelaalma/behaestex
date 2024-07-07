<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::first();

        if (!$user) {
            $user = User::create([
                'name' => '',
                'email' => '',
                'phone' => '',
                'address' => ''
            ]);
        }

        return $next($request, $user);
    }
}
