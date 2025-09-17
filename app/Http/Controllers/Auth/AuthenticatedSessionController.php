<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login'); // Mengarahkan ke file view yang akan kita buat
    }

    /**
     * Menangani percobaan autentikasi.
     */
    public function store(Request $request)
    {
        // 1. Validasi input: email wajib diisi dan formatnya email, password wajib diisi.
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Coba untuk melakukan login
        if (Auth::attempt($credentials)) {
            // 3. Jika berhasil, regenerate session untuk keamanan
            $request->session()->regenerate();

            // 4. Redirect ke halaman yang dituju setelah login (misal: /dashboard)
            return redirect()->intended('/dashboard');
        }

        // 5. Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Logout pengguna.
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirect ke homepage setelah logout
    }
}