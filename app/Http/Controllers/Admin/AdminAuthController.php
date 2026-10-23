<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    public function showLogin(): View|RedirectResponse
    {
        if (Auth::check()) {
            $ownerEmail = strtolower(trim((string) config('admin.email', '')));
            $authenticatedEmail = strtolower(trim((string) Auth::user()->email));

            if ($ownerEmail !== '' && hash_equals($ownerEmail, $authenticatedEmail)) {
                return redirect()->route('admin.dashboard');
            }

            Auth::logout();
        }

        return view('admin.auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $ownerEmail = strtolower(trim((string) config('admin.email', '')));
        $submittedEmail = strtolower(trim((string) $validated['email']));

        if (
            $ownerEmail === ''
            || ! hash_equals($ownerEmail, $submittedEmail)
            || ! Auth::attempt([
                'email' => $ownerEmail,
                'password' => $validated['password'],
            ])
        ) {
            return back()
                ->withErrors([
                    'email' => 'Email atau password tidak sesuai.',
                ])
                ->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}