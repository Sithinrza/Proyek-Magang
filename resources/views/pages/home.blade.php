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

     {{-- CARD --}}
    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 place-items-center">

                <!-- Card 1 -->
                <div class="group w-96 shadow-none">
                    <div class="card-bg">
                        <figure class="px-10 pt-10">
                        <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes"
                            class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center text-black">
                            <h3 class="mt-6 text-2xl font-bold text-gray-900 transition-colors duration-300 group-hover:text-white">Creative Content Management</h3>
                            <p class="mt-4 text-gray-600 flex-grow transition-colors duration-300 group-hover:text-white">
                                Layanan kreatif untuk memenuhi kebutuhan konten klien, termasuk pembuatan video promosi, fotografi dan desain grafis.
                            </p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="group w-96 shadow-none">
                    <div class="card-bg">
                        <figure class="px-10 pt-10">
                        <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes"
                            class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center text-black">
                            <h3 class="mt-6 text-2xl font-bold text-gray-900 transition-colors duration-300 group-hover:text-white">Web Development</h3>
                            <p class="mt-4 text-gray-600 flex-grow transition-colors duration-300 group-hover:text-white">
                                Pengembangan website modern dan responsif untuk profil perusahaan, e-commerce, atau sistem informasi internal.
                            </p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="group w-96 shadow-none">
                    <div class="card-bg">
                        <figure class="px-10 pt-10">
                        <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes"
                            class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h3 class="mt-6 text-2xl font-bold text-gray-900 transition-colors duration-300 group-hover:text-white">Digital Marketing</h3>
                            <p class="mt-4 text-gray-600 flex-grow transition-colors duration-300 group-hover:text-white">
                                Strategi pemasaran digital untuk meningkatkan visibilitas brand Anda melalui SEO, SEM, dan manajemen media sosial.
                            </p>
                        <div class="card-actions">
                            <button class="btn btn-primary">Selengkapnya</button>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


        <!-- home our customer -->
    <section class="">
        <div class="container">
            <div class="text-center mb-10">
                <h1 class="font-bold text-3xl sm:text-4xl text-gray-800">OUR COSTUMERS</h1>
                <p class="text-purple-500 font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui provident earum repudiandae fugit unde ex rem similique adipisci aut</p>
            </div>

        <!-- BARIS ATAS (bergerak ke KANAN) -->
            <div class="relative w-full overflow-hidden py-4">
                <!--
                    Class animasi ditempatkan di pembungkus luar ini, yang berisi DUA set logo.
                -->
                <div class="whitespace-nowrap animate-scroll-right">
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
                    <!--
                        logo duplikat diatas supaya animasinya terlihat tak terbatas. (bisa j disambat looping)
                    -->
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

            <div class="relative w-full overflow-hidden py-4 mt-8">
                <div class="whitespace-nowrap animate-scroll-left">
                    <!-- KUMPULAN LOGO PERTAMA -->
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
        </div>

    </section>

     <!-- home our client -->
    <section class=" p-10 pb-50">

        <div class="bg-white rounded-2xl overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 p-10 ">
                <!-- order itu urutan, misal order-1 itu urutan pertama dst -->
                <div class="p-8 lg:p-16 flex flex-col order-1 lg:order-1">
                   <h1 class="font-bold text-3xl sm:text-4xl text-gray-800">Our Clients Speak</h1>
                   <h3 class="mt-4 w-90 text-2xl text-gray-600 leading-relaxed font-semibold text-purple-500">
                        <span class="font-bold">Digitaliz</span> have been trusted by many people and companies
                    </h3>

                </div>

                <div class="order-1 lg:order-2">
                    <div class="bg-white rounded-2xl overflow-hidden shadow-xl mb-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 ">
                            <div class="p-8 flex flex-col justify-center order-2 md:order-1">
                                <p class="text-black font-sans">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem repellendus totam fugiat ex! Praesentium enim illum, facere odit officiis excepturi minima magni adipisci nulla minus recusandae necessitatibus nobis numquam repellat consectetur, ab harum reprehenderit dignissimos eaque architecto ratione ad dolore.</p>
                                <h2 class="text-2xl font-bold text-gray-800 pt-5">Futuca</h2>
                                <p class="mt-1 text-purple-500 font-semibold">Website Online Course</p>
                            </div>
                            <div class="p-4 flex items-center justify-center order-1 md:order-2">
                                <img src="https://shanibacreative.com/wp-content/uploads/2020/06/membuat-foto-profil-yang-bagus.jpg" alt="HRP" class="h-50 w-50 mx-auto rounded-full">
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl overflow-hidden shadow-xl ">
                        <div class="grid grid-cols-1 md:grid-cols-2 ">
                            <div class="p-8 flex flex-col justify-center order-2 md:order-1">
                                <p class="text-black font-sans">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem repellendus totam fugiat ex! Praesentium enim illum, facere odit officiis excepturi minima magni adipisci nulla minus recusandae necessitatibus nobis numquam repellat consectetur, ab harum reprehenderit dignissimos eaque architecto ratione ad dolore.</p>
                                <h2 class="text-2xl font-bold text-gray-800 pt-5">Futuca</h2>
                                <p class="mt-1 text-purple-500 font-semibold">Website Online Course</p>
                            </div>
                            <div class="p-4 flex items-center justify-center order-1 md:order-2">
                                <img src="https://shanibacreative.com/wp-content/uploads/2020/06/membuat-foto-profil-yang-bagus.jpg" alt="HRP" class="h-50 w-50 mx-auto rounded-full">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


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

@endsection
