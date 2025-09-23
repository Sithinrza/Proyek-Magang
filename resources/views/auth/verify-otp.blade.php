<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi OTP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center text-gray-900">Masukkan Kode OTP</h2>
            <p class="text-center text-sm text-gray-600">
                Kami telah mengirimkan kode 6 digit ke email Anda.
            </p>

            {{-- Menampilkan pesan sukses (misalnya: OTP berhasil dikirim ulang) --}}
            @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md" role="alert">
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-md" role="alert">
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form class="space-y-6" method="POST" action="{{ route('otp.verify') }}">
                @csrf
                <div>
                    <label for="otp_code" class="block mb-2 text-sm font-medium text-gray-900">Kode OTP</label>
                    <input type="text" name="otp_code" id="otp_code"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 text-center tracking-[1em]"
                           placeholder="_ _ _ _ _ _" required maxlength="6" autofocus>
                </div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Verifikasi & Login
                </button>
            </form>

            {{-- TOMBOL UNTUK KIRIM ULANG OTP --}}
            <div class="text-center text-sm">
                Tidak menerima kode?
                <form method="POST" action="{{ route('otp.resend') }}" class="inline">
                    @csrf
                    <button type="submit" class="font-medium text-blue-600 hover:underline focus:outline-none">
                        Kirim Ulang
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

