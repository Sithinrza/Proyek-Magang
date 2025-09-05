@extends('layouts.app')

@section('content')
       <!-- home our project -->
    <section class="px-10 pt-10 ">
        <div class="text-center mb-10">
            <h1 class="font-bold text-3xl sm:text-4xl text-gray-800">OUR PROJECT</h1>
            <p class="text-purple-500 font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui provident earum repudiandae fugit unde ex rem similique adipisci aut</p>
        </div>
        <div class="bg-white rounded-2xl overflow-hidden ">
            <div class="grid grid-cols-1 md:grid-cols-2 ">
                <!-- order itu urutan, misal order-1 itu urutan pertama dst -->
                 <div class="p-8 lg:p-16 flex flex-col justify-center">
                    <div class="order-1 lg:order-2 pb-6">
                        <h1 class="text-3xl font-bold text-gray-800">Futuca</h1>
                        <p class="mt-1 text-purple-500 font-semibold">Website Online Course</p>
                        <p class="mt-6 text-gray-600 leading-relaxed">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi, in sit mollitia reiciendis praesentium ratione est, veritatis tempora doloribus dolores fugit impedit necessitatibus saepe dolor unde rerum reprehenderit similique. Consequuntur?
                        </p>
                    </div>
                    <button class=" bg-transparent p-2 text-violet-800 hover:bg-violet-100 focus:outline-2 focus:outline-offset-2 focus:outline-violet-500 order-2 w-30 rounded border border-collapse">
                        Detail ->
                    </button>

                 </div>
                <div class="p-8 lg:p-12 order-1 lg:order-2 flex items-center">
                    <img src="https://digitaliz.net/images/picture-1.png" alt="Project">
                </div>
            </div>
        </div>
    </section>
@endsection
    <script>
            // 1. Temukan semua elemen dengan class 'nav-link'
            const navLinks = document.querySelectorAll('.nav-link');

            // 2. Buat fungsi untuk menangani apa yang terjadi saat link diklik
            function handleNavClick(event) {

                // Pertama, reset semua link: hapus warna ungu, tambahkan warna abu-abu
                navLinks.forEach(link => {
                    link.classList.remove('text-indigo-600');
                    link.classList.add('text-gray-700');
                });

                // Kemudian, beri warna ungu HANYA pada link yang diklik
                const clickedLink = event.currentTarget;
                clickedLink.classList.add('text-indigo-600');
                clickedLink.classList.remove('text-gray-700');
            }

            // 3. Pasang "pendengar" di setiap link
            navLinks.forEach(link => {
                link.addEventListener('click', handleNavClick);
            });
    </script>
