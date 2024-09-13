<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth; // Import Auth facade
// use Illuminate\Http\Response; // Import Response yang benar

// class UserAkses
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response)  $next
//      */
//     public function handle(Request $request, Closure $next, $role): Response
//     {
//         // Menggunakan Auth facade untuk mendapatkan user yang sedang login
//         if (Auth::check() && Auth::user()->role == $role) {
//             return $next($request);
//         }

//         // Kembalikan response JSON dengan status 403 Forbidden jika akses ditolak
//         return response()->json(['message' => 'Access Denied'], 403);
//     }
// }
