<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Log untuk debugging
        \Log::info('AdminMiddleware dijalankan. User: ' . (Auth::check() ? Auth::user()->email : 'Guest'));
        \Log::info('Memeriksa role user: ' . (Auth::check() ? Auth::user()->role : 'Tidak ada user'));
        
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            \Log::warning('Akses ditolak. User bukan admin.');
            return redirect()->route('admin.login')->withErrors(['email' => 'Akses admin saja!']);
        }
        return $next($request);
    }
}
