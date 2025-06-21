<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => [Auth::check() && Auth::user()->role === 'admin' ? 'required' : 'nullable', 'in:admin,user'],
        ]);

        try {
            $user = User::create([
                'nama' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => ($request->filled('role') && Auth::check() && Auth::user()->role === 'admin') ? $request->role : 'user',
            ]);
        } catch (\Exception $e) {
            // Jika gagal membuat user
            return redirect()->back()->withInput()->with('error', 'Gagal membuat akun: ' . $e->getMessage());
        }

        event(new Registered($user));

        // Jika admin yang membuat, jangan auto-login user baru, tetap di halaman CRUD
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect()->route('dashboard')->with('success', 'Akun berhasil dibuat!');
        }
        // Jika user biasa daftar sendiri, auto-login
        Auth::login($user);
        return redirect(route('dashboard', absolute: false))->with('success', 'Registrasi berhasil!');
    }
}
