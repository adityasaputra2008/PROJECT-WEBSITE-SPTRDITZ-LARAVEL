<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureOwner
{
    public function handle(Request $request, Closure $next): Response
    {
        $ownerEmail = strtolower(trim((string) config('admin.email', '')));

        if (! Auth::check()) {
            return redirect()->route('admin.login');
        }

        $authenticatedEmail = strtolower(trim((string) Auth::user()->email));

        if ($ownerEmail === '' || ! hash_equals($ownerEmail, $authenticatedEmail)) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()
                ->route('admin.login')
                ->withErrors([
                    'email' => 'Akun ini tidak memiliki akses ke Admin Panel.',
                ]);
        }

        return $next($request);
    }
}
