<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OtpVerificationController extends Controller
{
    /**
     * Menampilkan form verifikasi OTP.
     */
    public function showVerificationForm()
    {
        // Pastikan pengguna diarahkan dari halaman login
        if (!session()->has('otp_user_email')) {
            return redirect()->route('login');
        }

        return view('auth.verify-otp');
    }

    /**
     * Memverifikasi OTP yang dimasukkan pengguna.
     */
    public function verify(Request $request)
    {
        $validated = $request->validate(['otp_code' => 'required|numeric|digits:6']);

        // Menghapus spasi di awal/akhir dari input untuk mencegah error copy-paste
        $submittedOtp = trim($validated['otp_code']);

        $userEmail = $request->session()->get('otp_user_email');
        if (!$userEmail) {
            return redirect()->route('login')->withErrors(['otp_code' => 'Sesi verifikasi telah berakhir, silakan coba login kembali.']);
        }

        $user = User::where('email', $userEmail)->first();

        // Cek apakah kode OTP yang sudah dibersihkan benar dan belum kedaluwarsa
        if ($user && $submittedOtp == $user->otp_code && now()->isBefore($user->otp_expires_at)) {

            // Baris ini akan mencatat waktu verifikasi OTP, sehingga tidak akan diminta lagi.
            $user->otp_verified_at = now();

            // Bersihkan kode OTP setelah digunakan
            $user->otp_code = null;
            $user->otp_expires_at = null;
            $user->save();

            // Login pengguna
            Auth::login($user);
            $request->session()->regenerate();
            $request->session()->forget('otp_user_email');

            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors(['otp_code' => 'Kode OTP yang Anda masukkan tidak valid atau telah kedaluwarsa.']);
    }

    public function resend(Request $request)
    {
        $userEmail = $request->session()->get('otp_user_email');
        if (!$userEmail) {
            return redirect()->route('login')->withErrors(['otp_code' => 'Sesi Anda telah berakhir, silakan coba login kembali.']);
        }

        $user = User::where('email', $userEmail)->first();
        if ($user) {
            // Generate OTP baru
            $otpCode = rand(100000, 999999);
            $otpExpiresAt = now()->addMinutes(5); // OTP berlaku selama 5 menit

            $user->otp_code = $otpCode;
            $user->otp_expires_at = $otpExpiresAt;
            $user->save();

            // Kirim email OTP baru
            Mail::to($user->email)->send(new OtpMail($otpCode));

            // Kembalikan ke halaman verifikasi dengan pesan sukses
            return back()->with('status', 'Kode OTP baru telah berhasil dikirim ke email Anda.');
        }

        return redirect()->route('login')->withErrors(['otp_code' => 'Gagal mengirim ulang OTP. Pengguna tidak ditemukan.']);
    }
}

