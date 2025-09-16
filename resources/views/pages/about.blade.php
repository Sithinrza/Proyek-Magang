@extends('layouts.app')

@section('content')

<section class="pt-10 md:pt-10">
    <div class="text-center mb-10">
        <h1 class="font-bold text-3xl sm:text-4xl text-gray-800"><span class="text-violet-500">ABOUT </span>US</h1>
    </div>
</section>

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

<section class="p-10 md:p-20">
    <div class="text-center mb-12" data-aos="fade-up">
        <h1 class="font-bold text-3xl sm:text-4xl text-gray-800" >Mengapa Harus Digitaliz</h1>
        <p class="mt-1 text-purple-500 text-2xl">Karena Sesuai dengan Kebutuhan Anda</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center bg-white rounded-2xl" data-aos="fade-up">
        <div class="flex justify-center items-center">
            <img src="https://i.pinimg.com/736x/a8/b2/fc/a8b2fcdc1abb5f2b0484db8f9d81f3e7.jpg" alt="Project" class="max-w-full h-auto">
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-10">

            <div class="flex items-start" data-aos="fade-up">
                <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-200 text-indigo-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" d="M7.303.04a.5.5 0 0 1 .394 0L14.5 2.956l-7 3l-7-3zM0 3.83v7.67c0 .2.12.38.303.46L7 14.83v-8zm8 3l7-3v7.67a.5.5 0 0 1-.303.46L8 14.83z"/></svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-900">Unique Design</h3>
                    <p class="mt-1 text-sm text-gray-500">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>

            <div class="flex items-start" data-aos="fade-up">
                <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-200 text-indigo-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" d="M7.303.04a.5.5 0 0 1 .394 0L14.5 2.956l-7 3l-7-3zM0 3.83v7.67c0 .2.12.38.303.46L7 14.83v-8zm8 3l7-3v7.67a.5.5 0 0 1-.303.46L8 14.83z"/></svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-900">Service Innovation</h3>
                    <p class="mt-1 text-sm text-gray-500">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>

            <div class="flex items-start" data-aos="fade-up">
                <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-200 text-indigo-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" d="M7.303.04a.5.5 0 0 1 .394 0L14.5 2.956l-7 3l-7-3zM0 3.83v7.67c0 .2.12.38.303.46L7 14.83v-8zm8 3l7-3v7.67a.5.5 0 0 1-.303.46L8 14.83z"/></svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-900">Digital Strategy</h3>
                    <p class="mt-1 text-sm text-gray-500">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>

            <div class="flex items-start" data-aos="fade-up">
                <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-200 text-indigo-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" d="M7.303.04a.5.5 0 0 1 .394 0L14.5 2.956l-7 3l-7-3zM0 3.83v7.67c0 .2.12.38.303.46L7 14.83v-8zm8 3l7-3v7.67a.5.5 0 0 1-.303.46L8 14.83z"/></svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-900">Brand Identity</h3>
                    <p class="mt-1 text-sm text-gray-500">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>

            <div class="flex items-start" data-aos="fade-up">
                <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-200 text-indigo-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" d="M7.303.04a.5.5 0 0 1 .394 0L14.5 2.956l-7 3l-7-3zM0 3.83v7.67c0 .2.12.38.303.46L7 14.83v-8zm8 3l7-3v7.67a.5.5 0 0 1-.303.46L8 14.83z"/></svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-900">Transparency</h3>
                    <p class="mt-1 text-sm text-gray-500">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>

            <div class="flex items-start" data-aos="fade-up">
                <div class="flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-200 text-indigo-800">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 15 15"><path fill="currentColor" d="M7.303.04a.5.5 0 0 1 .394 0L14.5 2.956l-7 3l-7-3zM0 3.83v7.67c0 .2.12.38.303.46L7 14.83v-8zm8 3l7-3v7.67a.5.5 0 0 1-.303.46L8 14.83z"/></svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-900">Control</h3>
                    <p class="mt-1 text-sm text-gray-500">Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-10 md:p-20" data-aos="fade-up">
    <div class="text-center">
        <h1 class="font-bold text-3xl sm:text-4xl text-gray-800">Meet Our Expert Team</h1>
        <p class="mt-1 text-purple-500 text-2xl">Karena Sesuai dengan Kebutuhan Anda</p>
    </div>

    <!-- Tombol buka modal -->
    {{-- Ganti tombol "+ Add Member" Anda dari <button> menjadi <a> --}}
    <a href="{{ route('team.create') }}" class="btn btn-primary">+ Add Member</a>


    {{-- Ganti keseluruhan bagian @foreach Anda dengan ini --}}
    <div class="rounded-2xl overflow-hidden mt-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($teams as $team)
                <div class="p-6 flex flex-col items-center text-center shadow rounded-xl" data-aos="fade-up">
                    <img src="{{ $team->getImage()}}"
                        alt="{{ $team->name }}"
                        class="object-cover mb-4">
                    <h2 class="text-xl font-bold text-gray-800">{{ $team->name }}</h2>
                    <p class="text-gray-600">{{ $team->position }}</p>

                    <div class="mt-4 flex space-x-2">
                        {{-- TOMBOL EDIT SEKARANG MENJADI LINK KE HALAMAN EDIT --}}
                        <a href="{{ route('team.edit', $team->id) }}" class="btn btn-sm btn-warning ">
                            Edit
                        </a>
                        {{-- TOMBOL DELETE SEKARANG MENJADI FORM KECIL --}}
                         <form action="{{ route('team.destroy', $team->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-error">Delete</button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="md:p-20 min-h-screen flex flex-col justify-center" data-aos="fade-up">
    <div class="text-center mb-10">
        <h1 class="font-bold text-3xl sm:text-4xl text-gray-800" data-aos="fade-up">OUR COSTUMERS</h1>
        <p class="text-purple-500 font-semibold" data-aos="fade-up">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui provident earum repudiandae fugit unde ex rem similique adipisci aut</p>
    </div>

    <div class="relative w-full items-center overflow-hidden py-4" data-aos="zoom-in">
        <div class="whitespace-nowrap">
            <div class="inline-block">
                <div class="flex items-center justify-center space-x-16 px-8">
                    <img src="https://digitaliz.net/images/pemprov.png" alt="Pemprov Kalsel" class="h-16 w-auto">
                    <img src="https://digitaliz.net/images/hasnur-centre.png" alt="Yayasan Hasnur Centre" class="h-16 w-auto">
                    <img src="https://digitaliz.net/images/hafecs.png" alt="HAFECS" class="h-16 w-auto">
                    <img src="https://digitaliz.net/images/hrp.png" alt="HRP" class="h-16 w-auto">
                    <img src="https://digitaliz.net/images/polihasnur.png" alt="Politeknik Hasnur" class="h-16 w-auto">
                    <img src="https://digitaliz.net/images/pip.png" alt="Pengembangan Inovasi Pengajaran" class="h-16 w-auto">
                    <img src="https://digitaliz.net/images/wetland-box.png" alt="Wetland Box" class="h-16 w-auto">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
