@extends('users.layouts.app')

@section('content')

<section class="p-10 md:p-10">
    <div class="bg-white rounded-2xl overflow-hidden ">
        <div class="grid grid-cols-1 md:grid-cols-2 ">
            <!-- order itu urutan, misal order-1 itu urutan pertama dst -->
            <div class="p-8 lg:p-16 flex flex-col justify-center order-2 lg:order-2">
                <h1 class="text-3xl font-bold text-indigo-950">We are IT specialist</h1>
                <p class="mt-6 text-1xl text-gray-600 leading-relaxed">
                    Digitaliz adalah Konsultan, Pengembangan Sistem, dan Agen Pemasaran Digital dengan pemahaman tentang pasar Indonesia yang memiliki banyak pengalaman proyek-proyek Nasional.
                    Digitaliz memberikan solusi terhadap kebutuhan klien dalam membangun departemen informasi dan teknologi dalam menjalankan bisnis klien. Bersama tim yang berpengalaman, Kami menjamin solusi IT terbaik.
                </p>
            </div>

            <div class="p-8 lg:p-12 order-1 lg:order-2 flex justify-center items-center">
                <img src="https://digitaliz.net/images/object-2.png" alt="Project">
            </div>
        </div>
    </div>
</section>
@endsection
