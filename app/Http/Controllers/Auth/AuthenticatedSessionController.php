<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\OtpMail;

class AuthenticatedSessionController extends Controller
{
    /**
     * Menampilkan halaman login.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Menangani permintaan autentikasi dan pengiriman OTP.
     */
    public function store(Request $request)
    {
        // 1. Validasi data form
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Validasi kredensial tanpa membuat sesi login
        if (Auth::validate($credentials)) {
            $user = User::where('email', $request->email)->first();

            // Alur Verifikasi Email telah dihapus sesuai permintaan.
            // Langsung lanjut ke logika OTP.

            // 3. Pengecekan: Apakah pengguna sudah pernah verifikasi OTP sebelumnya?
            if (is_null($user->otp_verified_at)) {
                // Jika BELUM, jalankan proses pengiriman OTP.
                $otpCode = rand(100000, 999999);
                $otpExpiresAt = now()->addMinutes(5); // OTP berlaku selama 5 menit

                // Simpan OTP ke database
                $user->otp_code = $otpCode;
                $user->otp_expires_at = $otpExpiresAt;
                $user->save();

                // Kirim email berisi OTP
                Mail::to($user->email)->send(new OtpMail($otpCode));

                // Simpan email pengguna di session untuk verifikasi OTP
                $request->session()->put('otp_user_email', $user->email);

                // Arahkan ke halaman verifikasi OTP
                return redirect()->route('otp.verification')->with('status', 'Kami telah mengirimkan kode OTP ke email Anda.');
            }

            // 4. Jika semua verifikasi (OTP) sudah pernah dilakukan, login langsung
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        // 5. Jika kredensial (email/password) salah
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Menghancurkan sesi terautentikasi (logout).
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}

