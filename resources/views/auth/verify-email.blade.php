{{-- verify-email.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Alamat Email</title>
    {{-- Menggunakan Tailwind CSS dari CDN untuk styling --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md text-center">

            <h2 class="text-2xl font-bold text-gray-900">Verifikasi Email Anda</h2>

            <p class="text-gray-600">
                Terima kasih telah mendaftar! Sebelum melanjutkan, bisakah Anda memverifikasi alamat email Anda dengan mengklik tautan yang baru saja kami kirimkan melalui email kepada Anda?
            </p>

            {{-- Menampilkan pesan jika email berhasil dikirim ulang --}}
            @if (session('message'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('message') }}
                </div>
            @endif

            <p class="text-gray-600">
                Jika Anda tidak menerima email tersebut, kami akan dengan senang hati mengirimkan yang lain.
            </p>

            <div class="flex items-center justify-between mt-4">
                {{-- Form untuk mengirim ulang email verifikasi --}}
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Kirim Ulang Email Verifikasi
                    </button>
                </form>

                {{-- Form untuk logout --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-gray-600 underline hover:text-gray-900 ml-4">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
