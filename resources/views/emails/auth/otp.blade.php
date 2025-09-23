<x-mail::message>
# Kode Verifikasi Login Anda

Gunakan kode berikut untuk menyelesaikan proses login Anda. Kode ini hanya berlaku selama 5 menit.

<x-mail::panel>
{{ $otpCode }}
</x-mail::panel>

Jika Anda tidak merasa meminta kode ini, Anda bisa mengabaikan email ini dengan aman.

Terima kasih,<br>
{{ config('app.name') }}
</x-mail::message>
