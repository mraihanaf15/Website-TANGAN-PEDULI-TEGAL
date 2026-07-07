<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah dia sudah login DAN punya pangkat 'admin'
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Pintu dibuka!
        }

        // Jika bukan admin, tendang kembali ke Beranda
        return redirect('/')->with('error', 'Akses Ditolak! Hanya Admin yang diizinkan masuk.');
    }
}