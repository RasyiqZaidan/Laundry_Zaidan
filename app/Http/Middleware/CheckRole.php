<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        // Periksa apakah pengguna memiliki peran yang sesuai
        if ($request->user() && $request->user()->role === $role) {
            return $next($request);
        }

        // Jika tidak, kembalikan respons akses ditolak
        return abort(403, 'Unauthorized');
    }
}
